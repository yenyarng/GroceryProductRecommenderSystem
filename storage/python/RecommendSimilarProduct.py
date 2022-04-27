import pandas as pd
import numpy as np
import json
import sys
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import linear_kernel

project_dir="C://Users//yenya//OneDrive//Desktop//GroceryProductRecommenderSystem"
csv_file="//storage//data//GroceryProductData.csv"

df_data = pd.read_csv(project_dir + csv_file)

tfidf = TfidfVectorizer(stop_words="english")
df_data['overview'] = df_data["overview"].fillna("")
tfidf_matrix = tfidf.fit_transform(df_data['overview'])

cosine_sim = linear_kernel(tfidf_matrix, tfidf_matrix)

indices = pd.Series(df_data.index, index = df_data["product_name"]).drop_duplicates()
indices

# Content-based filtering
# Function that takes in Product_Name as input and outputs most similar products
def get_recommendations_similar_product(title, cosine_sim=cosine_sim):

    # passed as json because of limitation of sys.argv
    # if title is "chicken breat", using sys.argv[1] will only get "chicken"
    # right now the sys.argv[1] will get {"selected_product":"Chicken breast"}
    title = json.loads(title)
    title = title['selected_product']

    # Get the index of the products that matches the product
    idx = indices[title]

    # Get the pairwsie similarity scores of all products with that product
    sim_scores = list(enumerate(cosine_sim[idx]))

    # Sort the products based on the similarity scores
    sim_scores = sorted(sim_scores, key=lambda x: x[1], reverse=True)

    # Get the scores of the 4 most similar products
    sim_scores = sim_scores[1:5]

    # Get the product indices
    product_indices = [i[0] for i in sim_scores]

    # Return the top 10 most similar products
    # can use return
    # print(df_data['Product_Name'].iloc[product_indices])
    return df_data['product_name'].iloc[product_indices]

# run the function based on input json string
result = get_recommendations_similar_product(sys.argv[1])

# output: ['Chicken wings', 'Chicken carcass', 'Diced chicken',...]
result = result.tolist()

# convert back to json string
result = json.dumps(result)

# print result
print(result)




import sys

# make sure the code start from here
if __name__ == "__main__":
    user_pax_para = int(sys.argv[1])
    meal_num_para = int(sys.argv[2])
    product_id_para = int(sys.argv[3])

    import mysql.connector
    import pandas as pd

    connection = mysql.connector.connect(host='localhost',database='groceryproductrecommendersystem', user='root', password='')
    if connection.is_connected():
        cursor = connection.cursor()
        sql_select_Query = "select grocerylist_products.grocerylist_id, grocerylist_products.product_id, grocerylist_products.quantity, grocerylists.user_id, grocerylists.user_pax, grocerylists.meal_num from grocerylist_products join grocerylists on grocerylist_products.grocerylist_id = grocerylists.id"
        cursor.execute(sql_select_Query)
        grocerylist_df = pd.DataFrame(cursor.fetchall(), columns = ['grocerylist_id', 'product_id', 'quantity', 'user_id', 'user_pax', 'meal_num'])
        # collaborative filtering - give suggestions based on other user selection
        # parameter is the user_pax of the user and the product_id
        def get_recommendations_quantity(user_pax, meal_num, product_id):
            recommend_df = grocerylist_df[(grocerylist_df.user_pax == user_pax)&(grocerylist_df.meal_num == meal_num)&(grocerylist_df.product_id == product_id)]
            if recommend_df.empty:
                return(0)
            else:    
                recommend_quantity = recommend_df['quantity'].value_counts().idxmax()
            return(recommend_quantity)   
        output = get_recommendations_quantity(user_pax_para, meal_num_para, product_id_para) 
        #output = get_recommendations_quantity(2, 2, 1)       
        print(output)
        cursor.close()
        connection.close()
        
# import requests
# import sys
# from pandas import json_normalize
# url = 'http://127.0.0.1:8000/api/grocerylistproducts'
# response = requests.get(url)
# json = response.json()
# grocerylist_df = json_normalize(json)
# grocerylist_df.drop(['created_at', 'updated_at'],axis='columns',inplace=True)
# grocerylist_df = grocerylist_df.fillna(0)
# def get_recommendations_quantity(user_pax, meal_num, product_id):
#     recommend_df = grocerylist_df[(grocerylist_df.user_pax == user_pax)&(grocerylist_df.meal_num == meal_num)&(grocerylist_df.product_id == product_id)]
#     recommend_quantity = recommend_df['quantity'].value_counts().idxmax()
#     return(recommend_quantity)

# get_recommendations_quantity(sys.argv[1],sys.argv[2],sys.argv[3])


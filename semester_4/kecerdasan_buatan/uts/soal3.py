import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_absolute_error, mean_squared_error

# load data
data = pd.read_csv("data_kecepatan_internet.csv")

# pisahkan data menjadi data latih dan data uji
X = data[['kecepatan_internet']]
y = data['produktivitas_kerja']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)

# latih model regresi linear
regressor = LinearRegression()
regressor.fit(X_train, y_train)

# membuat prediksi dengan data uji
y_pred = regressor.predict(X_test)

# hitung nilai MAE, MSE, dan RMSE
mae = mean_absolute_error(y_test, y_pred)
mse = mean_squared_error(y_test, y_pred)
rmse = mean_squared_error(y_test, y_pred, squared=False)

# tampilkan nilai MAE, MSE, dan RMSE
print("MAE:", mae)
print("MSE:", mse)
print("RMSE:", rmse)

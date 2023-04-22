# Import library yang dibutuhkan
import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_absolute_error, mean_squared_error

# Load dataset
df = pd.read_csv("data_kecepatan_internet.csv")

# Pisahkan variabel independen (X) dan dependen (Y)
X = df['kecepatan_internet'].values.reshape(-1,1)
Y = df['produktivitas_kerja'].values.reshape(-1,1)

# Pisahkan data menjadi data latih dan data uji
X_train, X_test, Y_train, Y_test = train_test_split(X, Y, test_size=0.2, random_state=0)

# Membuat model regresi linear
regressor = LinearRegression()
regressor.fit(X_train, Y_train)

# Prediksi data uji
Y_pred = regressor.predict(X_test)

# Hitung nilai Mean Absolute Error, Mean Squared Error, dan Root Mean Squared Error
mae = mean_absolute_error(Y_test, Y_pred)
mse = mean_squared_error(Y_test, Y_pred)
rmse = np.sqrt(mse)

# Tampilkan hasil
print("Garis Regresi Linear: y = {:.2f}x + {:.2f}".format(regressor.coef_[0][0], regressor.intercept_[0]))
# print("Mean Absolute Error (MAE): {:.2f}".format(mae))
# print("Mean Squared Error (MSE): {:.2f}".format(mse))
# print("Root Mean Squared Error (RMSE): {:.2f}".format(rmse))

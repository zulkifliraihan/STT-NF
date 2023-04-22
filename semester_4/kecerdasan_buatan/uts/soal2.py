import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn.linear_model import LinearRegression

# Load dataset
df = pd.read_csv('data_kecepatan_internet.csv')

# Train the model
x_train = np.array(df['kecepatan_internet']).reshape(-1, 1)
y_train = np.array(df['produktivitas_kerja']).reshape(-1, 1)

regressor = LinearRegression()
regressor.fit(x_train, y_train)

# Plot the data and linear regression line
plt.scatter(x_train, y_train)
plt.plot(x_train, regressor.predict(x_train), color='red')
plt.title('Hubungan Antara Kecepatan Internet dan Produktivitas Kerja')
plt.xlabel('Kecepatan Internet (Mbps)')
plt.ylabel('Produktivitas (%)')
plt.show()

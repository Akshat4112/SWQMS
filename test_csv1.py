import csv
import matplotlib.pyplot as plt
import pylab
import sys


date = []
avgTemp = []
with open('Datafile.csv') as csvfile:
    reader = csv.DictReader(csvfile)
    for row in reader:
        if (row['Station-Location'])==sys.argv[1]:
            date.append((row['ENTRY DATE']).split('/')[0])
            avgTemp.append(row['TEMPERATURE (degree Centigrade)-Mean'])


plt.title('Line Plot of Temp.')
plt.plot(date, avgTemp)
plt.ylabel('Temperature')
plt.xlabel('date')
pylab.savefig('foo.jpg')
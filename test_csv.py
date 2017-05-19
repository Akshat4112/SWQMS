import csv
import matplotlib.pyplot as plt
import pylab
import sys

loc = []
avgTemp = []
with open('Datafile.csv') as csvfile:
    reader = csv.DictReader(csvfile)
    for row in reader:
        if (row['ENTRY DATE']).split('/')[0]==sys.argv[1]:
            loc.append(row['Station Code'])
            avgTemp.append(row['TEMPERATURE (degree Centigrade)-Mean'])

plt.title('Scatter plot of Avg Temp.')
plt.plot(loc, avgTemp,'ro')
plt.ylabel('Temperature')
plt.xlabel('location')
pylab.savefig('scplot.png')



import csv

def leggi_csv(nome_file): # 'autori.csv'
    # uso di lista
    with open(nome_file) as csv_file:
        csv_reader = csv.reader(csv_file, delimiter=',')
        line_count = 0
        for row in csv_reader:
            line = row[0]
            for i in range(1, len(row)): # row e' una lista
                line += ('\t' + row[i])
            print(line)
            line_count += 1
        print('Processate' + str(line_count) + ' linee.')
    print("\n")
        

def main():
    leggi_csv('dati_tabella_utenti.csv')


main()
        
        
    
    

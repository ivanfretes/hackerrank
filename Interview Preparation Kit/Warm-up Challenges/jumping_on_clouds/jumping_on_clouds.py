#/usr/bin/python3


'''

La solucion consisten en analizar hasta el penultimo elemento, 
para no descartar el ultimo camino, es por ello que el caso optimo(index + 2)
se analiza siempre y cuando sea menor a la longitud del elemento

- Se recorre hasta nubes[n-1]
- Se verifica que el indice + 2 < logitud de nubes
- Sino se busca en indice + 1 < que es la opcion menos optima

'''

def jumpingOnClouds(c):
    
    current_index = 0
    cant_cloud = len(c)
    jump = 0

    while (current_index + 1 < cant_cloud):

        if current_index + 2 < cant_cloud and c[current_index + 2] == 0:
            current_index += 2
            jump += 1
        elif c[current_index + 1] == 0:
            current_index += 1
            jump += 1

    return jump

if __name__ == "__main__":
    print(jumpingOnClouds([0,0,0,1,0,0]))
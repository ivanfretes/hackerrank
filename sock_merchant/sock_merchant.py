#!/usr/bin/python3

def sockMerchant(n, arr):

    # Ordenar Medias
    arr.sort()

    # Otra caja con las etiquetas, vacia
    array_contador = {arr[i] : 0 for i in range(n - 1) if arr[i] != arr[i+1]}
    array_contador[arr[n - 1]] = 0
    
    # Contando y asignado la cantidad a la etiqueta
    for i in range(n):
        array_contador[arr[i]] += 1


    # Bucle Por comprension 13 / 2 : 6.5 => int(6.5) => 6
    pares = [int(array_contador[numero] / 2)
                    for numero in array_contador 
                        if array_contador[numero] >= 2]
    
    return sum(pares)

if __name__ == "__main__":
    print(sockMerchant(20, [4,5,5,5,6,6,4,1,4,4,3,6,6,3,6,1,4,5,5,5]))


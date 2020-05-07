#!/usr/bin/python3

def countingValleys(n, s):
    sea_level = 0
    count_valley = 0

    for direccion in s:
        if direccion == 'U':
            sea_level += 1
        elif direccion == 'D':
            sea_level -= 1
            
            if sea_level == -1:
                count_valley += 1

    return count_valley


if __name__ == "__main__":
    print(countingValleys(8,"UDDDUDUU"))


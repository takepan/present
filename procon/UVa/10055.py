# -*- coding: utf-8 -*-

import sys

def main():
    while True:
        try:
            b, c = map(int, input().split())
            print(c - b)
        except EOFError:
            exit(0)

if __name__ == '__main__':
    main()

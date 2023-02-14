from secretpy import Playfair, CryptMachine


def encdec(machine, plaintext):
    print(plaintext)
    enc = machine.encrypt(plaintext)
    print(enc)
    dec = machine.decrypt(enc)
    print(dec)
    print("----------------")


cm = CryptMachine(Playfair())
alphabets = [
    'p', 'l', 'a', 'y', 'f',
    'i', 'r', 'b', 'c', 'd',
    'e', 'g', 'h', 'k', 'm',
    'n', 'o', 'q', 't', 'u',
    'v', 'w', 'x', 'y', 'z'
]

(cm.set_alphabet(alphabets))

plaintext = "hello world"
encdec(cm, plaintext)
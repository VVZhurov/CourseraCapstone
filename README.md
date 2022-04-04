# Coursera Cybersecurity Capstone project by Luciano Gavoni

The project consists of a chat web-based app in which every message has been encrypted.
The app is made of:
  - HTML - CSS - Javascript
  - PHP
  - Maria DB

# Encryption 

I chose to use some OpenSSL functions which allow me to encrypt the messages with AES256 in CBC mode.
Specifically,
- it's compatible with other AES implementations, but not mcrypt, since mcrypt uses PKCS#5 instead of PKCS#7.
- generates a key from the provided password using SHA256
- generates a hmac hash of the encrypted data for integrity check
- generates a random IV for each message
- prepends the IV (16 bytes) and the hash (32 bytes) to the ciphertext

You can find my deploy  [here](https://www.gavoniluciano.com/coursera/index.php).

Dump by DB [here](https://www.gavoniluciano.com/coursera/dbdump.php).
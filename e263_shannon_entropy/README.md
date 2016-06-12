# Challenge 263 Shannon Entropy

Shannon entropy was introduced by Claude E. Shannon in his 1948 paper "A Mathematical Theory of Communication". Somewhat related to the physical and chemical concept entropy, the Shannon entropy measures the uncertainty associated with a random variable, i.e. the expected value of the information in the message (in classical informatics it is measured in bits). This is a key concept in information theory and has consequences for things like compression, cryptography and privacy, and more.
The Shannon entropy H of input sequence X is calculated as -1 times the sum of the frequency of the symbol i times the log base 2 of the frequency

Input
```
122333444455555666666777777788888888
563881467447538846567288767728553786
https://www.reddit.com/r/dailyprogrammer
int main(int argc, char *argv[])
```

Output
```
2.794208683
2.794208683
4.056198332
3.866729296
```
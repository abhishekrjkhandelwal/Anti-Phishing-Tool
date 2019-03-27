#G:\xampptimes\htdocs\phishing
'''
def test1():
	a = "Hello 123";
	print(a);
	
test1();
'''

import sys

def fun():
	x = sys.argv[1];
	y = sys.argv[2];
	print (x);
	print (y);

	if(x == 'qwe'):
		sys.exit(123);
	else:
		sys.exit(323);
	
	print ("Done.");
	sys.exit(123);

fun();
sys.exit(9);
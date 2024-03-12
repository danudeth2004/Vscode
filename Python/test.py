from numpy import array
from numpy import identity
A = array([[7,0,-5],[1,2,3]])
I = identity(4)
T = array([[1,2,3],[5,6,7]])
print(A)
print(I)
print(T.T)
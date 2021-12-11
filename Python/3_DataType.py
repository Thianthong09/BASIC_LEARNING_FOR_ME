# Data Type & Variable

from typing import Tuple


x = 10 #integer

print("Sum = "+str(x)) #ແປ x ເປັນ  String ໂດຍໃຊ້ str str(x) 
print("ສ ະ ບ າ ຍ ດີ")
y =3.99
z= True
print(y)
print(z)

#ສະແດງຊະນິດຂໍ້ມູນ ໂດຍໃຊ້ type ()
print(type(y))
print(type("ສະບາຍດີ"))
print("_______________________________")

# ການແປງຊະນິດຂໍ້ມູນ
x=10
y=3.14
z="20"

result=x+y
print(result)
print(type(x))
print(type(y))
print(type(z))
print(type(result))

print("_______________________________")

sum = x+int(z) # ແປງ String ໃຫ້ເປັນ int()
print(sum)
print(type(sum))
print("_______________________________")

sum2=float(z)+y #  ແປງ String ໃຫ້ເປັນ float()
print(sum2)
print(type(sum2))

print("_______________________________")
#ການກຳນົດໃຫ້ຕົວແປ z
z="30"
z=float(z)
print(z)
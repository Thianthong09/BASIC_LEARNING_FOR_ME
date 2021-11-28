#Program process BMI
# BMI = ນ້ຳໜັກ (kg) / ສ່ວນສູງ * ສ່ວນສູງ (m)

#Input      | Covert to integer
weight=int(input("ປ້ອນນ້ຳໜັກຂອງທ່ານ (kg): "))
height=int(input("ປ້ອນສ່ວນສູງຂອງທ່ານ (cm) : ")) # /100

#Process
#ແປງ cm ໃຫ້ເປັນ m
height=height/100       # height/=100

#Calculate bmi
bmi=weight/(height*height) # height ** 2


#Output
print("BMI = ",bmi)
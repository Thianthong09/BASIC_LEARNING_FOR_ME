# - Operators: Arithmetic, Assignment, Comparison, Logical
#------------------------------------------------
# Arithmetic Operators
# - + Addition
# - - Subtraction
# - * Multiplication
# - / Division 
# - % Mod (the remainder after dividing)
# - ** Exponentiation (note that ^ does not do this operation, as you might have seen in other languages)
# - // Divides and rounds down to the nearest integer

print(3+5)#8
print(1+2+3*3)#12
print(3**2)#9
print(9%2)#1

#------------------------------------------------
#Example 1 : 
# Quiz: Average Electricity Bill
# It's time to try a calculation in Python!
# My electricity bills for the last three months have been 23, 32 and 64. What is the average monthly
# electricity bill over the three month period? Write an expression to calculate
# the mean, and use print() to view the result.

# ແບບທົດສອບ: ຄ່າໄຟຟ້າສະເລ່ຍ
# ຄ່າໄຟຟ້າຂອງຂ້ອຍໃນສາມເດືອນຜ່ານມາແມ່ນ 23 ໂດລາ, 32 ໂດລາ, ແລະ 64 ໂດລາ. ຄ່າໄຟຟ້າລາຍເດືອນສະເລ່ຍໃນໄລຍະສາມເດືອນແມ່ນເທົ່າໃດ?
# ຂຽນສຳນວນເພື່ອຄິດໄລ່ຄ່າສະເລ່ຍ, ແລະ ໃຊ້ print() ເພື່ອເບິ່ງຜົນ.

#Write an expression that calculates the average of 23, 32 and 64
#Place the expression in this print statement
print((23+32+64)/3) #39.666666666666664

#------------------------------------------------
#Example 2 : 
# Quiz: Calculate
# In this quiz you're going to do some calculations for a tiler. Two parts of a floor need
# tilin. One part is 9 tiles wide by 7 tiles long, the other is 5 tiles wide by 7 tiles long. Tiles come in packageso of 6
# ໃນແບບທົດສອບນີ້ ເຈົ້າຈະຕ້ອງຄຳນວນຫາຊ່າງກະເບື້ອງ ພື້ນສອງສ່ວນຕ້ອງການປູກະເບື້ອງ ດ້ານໜຶ່ງກວ້າງ 9 ແຜ່ນ ຍາວ 7 ແຜ່ນ ອີກສ່ວນກວ້າງ 5 ແຜ່ນ ຍາວ 7 ແຜ່ນ ກະເບື້ອງມາໃນຊຸດລະ 6.
# 1. How many tiles are needed?  - ຕ້ອງການກະເບື້ອງຈັກອັນ?
# 2. You buy 17 packages of tiles containing 6 tiles each. How many tiles will by left over? - ເຈົ້າຊື້ແຜ່ນກະເບື້ອງ 17 ແຜ່ນ ຊູດລະ 6 ແຜ່ນ ຈະເຫຼືອກະເບື້ອງຈັກແຜ່ນ?

# Fill this in with an expression that calculates how many tiles are needed.
print(9*7+5*7) #98

# Fill this in with an expression that calculates how many tiles will be left over.
print(17*6-(9*7+5*7)) #4

# Thanks for completing that! // ຂອບໃຈສຳລັບການເຮັດໃຫ້ສຳເລັດ
# You correctly calculated the number of tiles needed. Nice work! // ເຈົ້າຄິດໄລ່ຈຳນວນຂອງກະເບື້ອງທີ່ຕ້ອງການໄດ້ຢ່າງຖືກຕ້ອງ. ເຮັດໄດ້ດີຫຼາຍ!
#  I calculated my answer like this: 9*7 + 5*7 // ຂ້ອຍຄິດໄລຄຳຕອບຂອງຂ້ອຍຄືແນວນີ້: 9*7+5*7


# You correctly calculated the number of leftover tiles. Well done! // ເຈົ້າໄດ້ຄຳນວນຈຳນວນແຜ່ນທີ່ເຫຼືອໄດ້ຢ່າງຖືກຕ້ອງ. ເຮັດໄດ້ດີ!
#  I calculated my answer like this: (17*6) - (9*7 + 5*7) // ຂ້ອຍຄິດໄລຄຳຕອບຂອງຂ້ອຍຄືແນວນີ້: (17*6)-(9*7+5*7)

#------------------------------------------------
# QUESTION 3 OF 3
# Which of these lines of Python code are well formatted? How would you improve the readability of the codes that don't use good formatting? (Choose all that apply)
# - print(((3+32))+ - 15//2)
# - print((17-6)%(5+2))
# - print((1+2+4)/13)
# - print(4/2 - 7*7)

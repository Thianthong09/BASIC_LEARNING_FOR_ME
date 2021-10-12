# come 3 , pay 2
# come 4 , pay 3

# input -> process -> output

# input
# come_x = 4
# pay_y = 3
# per_head = 100
# pax = 9
#
# # process
# # print ((pax // come_x)*(pay_y*per_head))
# # print (pax % come_X * per_head)
# total = (pax // come_x)*(pay_y*per_head)+(pax%come_x)
# print(total)

def come_x_pay(pax, per_head, come_x=4, pay_y=3):
    total = (pax // come_x)*(pay_y * per_head)+(pax % come_x)
    return total

# print (come_x_pay(3,100,3,2))
print(come_x_pay(10,250,7,5))
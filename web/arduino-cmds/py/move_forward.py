#!/usr/bin/env python3
import serial; 

ser = serial.Serial('/dev/ttyACM0', 9600); 
ser.baudrate=9600

param = '2'
ser.write(str.encode(param))

print("move_forward.py executed")




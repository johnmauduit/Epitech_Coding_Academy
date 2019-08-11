import time
import datetime
import calendar
# i = int(input('Enter a date in YYYY-MM-DD HH:MM:SS format : '))
# now = datetime.datetime(i)
# epoch = (now - datetime.datetime.utcfromtimestamp(0)).total_seconds()


# print (epoch)
# mydate = datetime.date(1943,3, 13)  #year, month, day
# print(mydate.strftime("%Y, %B, %d, %H:%M:%S"))


# import calendar, time
# from datetime import datetime

# def convert_utc_to_epoch(timestamp_string):
#     '''Use this function to convert utc to epoch'''
#     timestamp = datetime.strptime(timestamp_string, '%Y-%m-%d %H:%M:%S')
#     epoch = int(calendar.timegm(timestamp.utctimetuple()))
#     print (epoch)
#     return epoch

# convert_utc_to_epoch('2010-02-14 13:00:00')
# epoch = 1493313015

# def display_time(epoch):
#     print (time.strftime("%H:%M:%S, %A, %w day of the %U week of %Y  %Z", time.localtime(epoch)))


# display_time(1493313015)
class Email:

    def __init__(self):
        pass
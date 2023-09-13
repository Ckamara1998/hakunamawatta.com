# Python code to finding number of
# leap years in list of years.
 
# Input list initialization
Input = [1975, 1976, 1977, 1978, 1979, 1980,
         1981, 1982, 1983, 1984, 1985, 1986,
         1987, 1990, 1991, 1992, 1993, 1994,
         1995, 1996, 1998, 1999, 2000, 2001,
         2002, 2003, 2004, 2005, 2006, 2007,
         2008, 2009, 2010, 2011, 2012, 2013, 
         2014, 2015, 2016, 2017, 2018, 2019, 
         2020, 2021, 2022, 2023, 2024, 2025,
         2026, 2027, 2028, 2029, 2030, 2031,
         2032, 2033, 2034, 2035, 2036, 2037,
         2038, 2039, 2040, 2041, 2042, 2043,
         2044, 2045, 2046, 2047, 2048, 2049,
         2050, 2051, 2052]
 
# Find whether it is leap year or not
def leap_Year(year):
    return (((year % 4 == 0) and
             (year % 100 != 0)) or
             (year % 400 == 0))
  
# Answer Initialization
Answer = 0
 
for elem in Input:
    if leap_Year(elem):
        Answer = Answer + 1
 
# Printing
print("leap years are:", Answer)
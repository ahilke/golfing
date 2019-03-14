import Data.List
a=intercalate
main=putStr(a"\n"[a" "z|z<-[[show x|x<-[1..y],mod y x==0]|y<-[1..100]]])
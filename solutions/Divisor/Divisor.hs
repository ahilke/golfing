import Data.List
a=intercalate
main=putStrLn(a"\n"[a" "[show n|n<-z]|z<-[[x|x<-[1..y],mod y x==0]|y<-[1..100]]])
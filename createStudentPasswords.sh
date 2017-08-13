apg -n $1 > passwords
awk '{ print "student"NR, $0 }' passwords > userpasswords.txt
rm passwords


import MySQLdb
import sys
name='GOOG'
month='141226'
try:
	conn = MySQLdb.connect(host='localhost', user='lzhang',passwd='lzhangUNT',db='OptionData')
	cur=conn.cursor()
	cur.execute("DROP TABLE IF EXISTS %s"%name)
	cur.execute('CREATE TABLE IF NOT EXISTS %s(Rdata date,ExpDate date, Options int, Strike varchar(10), Cname varchar(25), Last varchar(10), Bid varchar(10), Ask varchar(10),Changes varchar(10),ChangeR varchar(10), Vol varchar(10), IV varchar(10))'%name)
	cur.execute("INSERT INTO %s(ExpDate) VALUES('%s')"%(name,month))
except MySQLdb.Error, e:

	print "Error %d:%s" %(e.args[0],e.args[1])
	#sys.exit(1)

finally:
	conn.close()
	print "closed"

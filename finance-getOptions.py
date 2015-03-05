import requests
import bs4
import string
import time


root_url='http://finance.yahoo.com/q/op?s='
print "input search name"
search_name=raw_input().upper()
index_url=root_url+ search_name
time.time()
local_time=time.strftime("%m-%d-%y", time.localtime()) 
print "url is %s" %index_url

def get_all_value():
    response=requests.get(index_url)
    soup= bs4.BeautifulSoup(response.text)
    return [a.attrs.get('value') for a in soup.select('div.App-Bd option[value]')]
def get_all_data(all_value):    
    date=[]
    name=[]
    last=[]
    bid=[]
    ask=[]
    change=[]
    changeR=[]
    interest=[]
    volatility=[]
    strike=[]
    volumn=[]
    response=requests.get(index_url+"&data="+all_value)
    soup=bs4.BeautifulSoup(response.text)
    date= soup.select('div.App-Bd option[value=%s]'%all_value)[0].get_text()+'\n'
    f.write(" %s"%date)
    f.write(' Calls\n')
    datas=soup.select('div.option_entry')
    for i in range(0,len(datas),8):
        name.append(datas[i].get_text())
        last.append(datas[i+1].get_text())
        bid.append(datas[i+2].get_text())
        ask.append(datas[i+3].get_text())
        change.append(datas[i+4].get_text())
        changeR.append(datas[i+5].get_text())
        interest.append(datas[i+6].get_text())
        volatility.append(datas[i+7].get_text())
    datas=soup.select('strong') 
    for i in range(0,len(datas),2):
        strike.append(datas[i].get_text())
        volumn.append(datas[i+1].get_text())
    f.write("%7s%20s%7s%7s%7s%10s%10s%10s%18s%20s\n"%('Strike','Contract Name','Last','Bid','Ask','Change',"%Change",'Volumn','Open Interest','Implied Volatility'))
    for i in range(0, len(name)):
        if i>0:
            if string.atof(strike[i-1])>string.atof(strike[i]):
                f.write(' Puts\n')
                f.write("%7s%20s%7s%7s%7s%10s%10s%10s%18s%20s\n"%('Strike','Contract Name','Last','Bid','Ask','Change',"%Change",'Volumn','Open Interest','Implied Volatility'))
        f.write("%7s%20s%7s%7s%7s%10s%10s%10s%18s%20s\n"%(strike[i],name[i],last[i],bid[i],ask[i],change[i],changeR[i],volumn[i],interest[i],volatility[i]))
        
if __name__ == '__main__':
     all_values=get_all_value()
     f=file('%s%s.txt'%(search_name,local_time),'w')
     print 'processing'
     for all_value in all_values:
         get_all_data(all_value)
         print '.'
     f.close()
     print 'done\n'

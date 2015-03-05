import requests
import bs4
import string
search_name=''
root_url_1='http://finance.yahoo.com/q?s=' #summary
root_url_2='http://finance.yahoo.com/q/pr?s=' #AKVA+Profile
root_url_3='http://finance.yahoo.com/q/is?s=' #AKVA+Income+Statement&annual
root_url_4='http://finance.yahoo.com/q/bs?s=' #AKVA+Balance+Sheet&annual

def get_all_data(search_name):
    response=requests.get(root_url_1+search_name)
    soup=bs4.BeautifulSoup(response.text)
    data_Name=soup.select('h2')[2].get_text()
    print data_Name
    print "Get Name"
    f.write("Cop Name\n")
    f.write(data_Name+'\n')
    data_MC= soup.select('.yfnc_tabledata1')[11].get_text()
    print "Get Market Cap"
    f.write("Market Cap\n")
    f.write(data_MC+'\n') 
    response=requests.get(root_url_2+search_name+"+Profile")
    soup=bs4.BeautifulSoup(response.text)
    data_FE= soup.select('td')
    for i in range(0,len(data_FE)):
        if data_FE[i].get_text().strip()=="Full Time Employees:":
            print "Get Full Time Employees:"
            f.write('Full Time Employees:\n')
            f.write(data_FE[i+1].get_text().strip().encode('utf-8')+'\n')
    response=requests.get(root_url_3+search_name+"+Income+Statement&annual")
    soup=bs4.BeautifulSoup(response.text)
    data_RN= soup.select('strong')
    for i in range(0,len(data_RN)):
        if data_RN[i].get_text().strip()=="Total Revenue":
            print "Get Total Revenue"
            f.write('Total Revenue\n')
            f.write(data_RN[i+1].get_text().strip().encode('utf-8')+'\n')
        if data_RN[i].get_text().strip()=="Net Income":
            print "Get Net Income"
            f.write('Net Income\n')
            f.write(data_RN[i+1].get_text().strip().encode('utf-8')+'\n')
    data_ITE=soup.select('td')
    for i in range(0,len(data_ITE)):
        if data_ITE[i].get_text().strip()=="Income Tax Expense":
            print "Get Income Tax Expense"
            f.write('Income Tax Expense\n')
            f.write(data_ITE[i+1].get_text().strip().encode('utf-8')+'\n')
    response=requests.get(root_url_4+search_name+"+Balance+Sheet&annual")
    soup=bs4.BeautifulSoup(response.text)
    data_TA=soup.select('strong')
    for i in range(0,len(data_TA)):
        if data_TA[i].get_text().strip()=="Total Assets":
            print "Get Total Assets"
            f.write('Total Assets\n')
            f.write(data_TA[i+1].get_text().strip().encode('utf-8')+'\n')
if __name__ == "__main__":
    for i in range (1000):
        search_name=raw_input('type Ticker\n').upper()
        f=file('%s.txt'%(search_name),'w')
        get_all_data(search_name)

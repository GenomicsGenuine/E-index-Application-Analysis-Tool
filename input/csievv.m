function csievv(filename1,filename2)
%对文件1进行操作
data1=csvread(filename1)
x=data1(:,1);
y=data1(:,2);
[m1,n1]=size(data1);
%x=[0 10 20 30 40 50 55];
%y=[70 70 70 70 70 70 75];
xmin1=data1(1,1);
xmax1=data1(m1,1);

%Integral:计算E-index
i=0;
j=1;
f_direction1=zeros(n1,1);
E_index1=zeros(n1/2,1);
while(i<n1 && j<n1/2+1)
    f_direction1=interp1(data1(:,i+1),data1(:,i+2),xmin1:0.01:xmax1,'spline');
    E_index1(j,1)=sum(f_direction1*0.01)/(data1(m1,i+1)-data1(1,i+1))/(data1(m1,i+2)-data1(1,i+2))
    i=i+2;
    j=j+1;
end
%结束计算E-index
%结束对文件1进行的操作



%对文件2进行操作
%对文件1进行操作
data2=csvread(filename2)
x=data2(:,1);
y=data2(:,2);
[m2,n2]=size(data2);
%x=[0 10 20 30 40 50 55];
%y=[70 70 70 70 70 70 75];
xmin2=data2(1,1);
xmax2=data2(m2,1);

%Integral:计算E-index
ii=0;
jj=1;
f_direction2=zeros(n2,1);
E_index2=zeros(n2/2,1);
while(ii<n2 && jj<n2/2+1)
    f_direction2=interp1(data2(:,ii+1),data2(:,ii+2),xmin2:0.01:xmax2,'spline');
    E_index2(jj,1)=sum(f_direction2*0.01)/(data2(m2,ii+1)-data2(1,ii+1))/(data2(m2,ii+2)-data2(1,ii+2))
    ii=ii+2;
    jj=jj+1;
end
%结束计算E-index
%结束对文件2进行的操作

%开始t-test
mu1=mean(E_index1);
mu2=mean(E_index2);
df=n1/2+n2/2-2;
s1=std(E_index1);
s2=std(E_index2);
s=((n1/2-1)*s1*s1+(n2/2-1)*s2*s2)/df;
t_test=abs((mu1-mu2)/sqrt(s)/sqrt(2/n1+2/n2))
%结束t-test

%导出需要的数据，存到一个固定的数组中去
ntotal=n1/2+n2/2+3;
we_want=zeros(ntotal,1);
we_want(1,1)=mu1;
we_want(2,1)=mu2;
we_want(3,1)=t_test;
for iii = 1:n1/2
    we_want(iii+3,1)=E_index1(iii,1);
end
for jjj = 1:n2/2
    we_want(jjj+n1/2+3)=E_index2(jjj,1);
end
%结束导出

fid = fopen('d:/Programming/Xampp/htdocs/E-index/output/E-indexv.txt', 'wt');
fprintf(fid, '%f\n', we_want);
fclose(fid);

quit force
function csi(filename)
data=csvread(filename);
x=data(1,:);
y=data(2,:);
%x=[0 10 20 30 40 50 55];
%y=[70 70 70 70 70 70 75];

%size(y_up);
%size(y_down);
%size(x_down);
%size(x_up);

%Integral
f_direction1=interp1(x,y,-34.65:0.01:15,'spline');

E_index=sum(f_direction1*0.01)

fid = fopen('d:/Programming/Xampp/htdocs/E-index/output/E-index.txt', 'wt');
    fprintf(fid, '%f', E_index);
fclose(fid);
quit force

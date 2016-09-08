function csiev(filename)
data=csvread(filename);
x=data(1,:);
y=data(2,:);
f_direction1=interp1(x,y,-34.65:0.01:15,'spline');
E_index=sum(f_direction1*0.01)
fid = fopen('d:/Programming/Xampp/htdocs/E-index/output/E-index.txt', 'wt');
    fprintf(fid, '%f', E_index);
fclose(fid);
quit force
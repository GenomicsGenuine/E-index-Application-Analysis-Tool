function phpcreatefile(filepath)
fid = fopen(filepath, 'wt');
for i = 1:100
    randNumber = [num2str(rand(1)) '\n'];
    fprintf(fid, 'randNumber','\n');
end
fclose(fid);
quit force
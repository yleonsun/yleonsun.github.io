files = dir('pub');

for i=3:length(files)
    zoompic(['pub/' files(i).name], 150, 150);
end
quit

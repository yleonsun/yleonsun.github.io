function zoompic(filenm, h, w)
img = imread(filenm);
ih = size(img,1);
iw = size(img,2);

p1 = iw/w
p2 = ih/h
p = p1;
if p > p2
    p = p2;
end
if p > 1
img = img(floor(ih/2-p*h/2)+1:p:floor(ih/2+p*h/2),floor(iw/2-p*w/2)+1:p:floor(iw/2+p*w/2),:);
imwrite(img,filenm);
end
end
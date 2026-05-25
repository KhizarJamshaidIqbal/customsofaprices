from PIL import Image, ImageChops

def trim(im):
    bg = Image.new(im.mode, im.size, im.getpixel((0,0)))
    diff = ImageChops.difference(im, bg)
    diff = ImageChops.add(diff, diff, 2.0, -100)
    bbox = diff.getbbox()
    if bbox:
        return im.crop(bbox)
    return im

def crop_image(filepath):
    try:
        im = Image.open(filepath)
        im = im.convert("RGBA")
        
        # Replace white background with transparency (optional but useful)
        datas = im.getdata()
        newData = []
        for item in datas:
            if item[0] > 240 and item[1] > 240 and item[2] > 240:
                newData.append((255, 255, 255, 0))
            else:
                newData.append(item)
        im.putdata(newData)
        
        # Crop the transparent bounding box
        bbox = im.getbbox()
        if bbox:
            im = im.crop(bbox)
            
        im.save(filepath, "PNG")
        print(f"Successfully cropped {filepath}")
    except Exception as e:
        print(f"Error cropping {filepath}: {e}")

crop_image("images/logo.png")
crop_image("images/favicon.png")

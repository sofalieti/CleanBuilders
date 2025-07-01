const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

const sourceDir = 'public/assets/images/photos';
const optimizedDir = 'public/assets/images/optimized';

// Изображения для блока Why CleanBuilders (400x400px)
const whyCleanBuildersImages = [
    'WhatsApp Image 2025-06-17 at 19.27.39_69a274e1.jpg',
    'WhatsApp Image 2025-06-17 at 19.27.39_94205105.jpg',
    'IMG-20250620-WA0002.jpg',
    'IMG-20250620-WA0059.jpg'
];

// Изображения для блока Amazing Home Transformations (600x400px)
const transformationsImages = [
    'IMG-20250620-WA0001.jpg',
    'IMG-20250701-WA0045.jpg',
    'IMG-20250701-WA0018.jpg',
    'IMG-20250701-WA0027.jpg',
    'IMG-20250620-WA0038.jpg',
    'IMG-20250620-WA0061.jpg'
];

// Изображения для блока What We Work With (400x250px)
const servicesImages = [
    'IMG-20250701-WA0045.jpg',
    'IMG-20250701-WA0027.jpg',
    'IMG-20250620-WA0061.jpg'
];

async function optimizeImages() {
    console.log('Начинаю оптимизацию изображений...');

    try {
        // Оптимизация для блока Why CleanBuilders
        console.log('Оптимизирую изображения для блока Why CleanBuilders (400x400px)...');
        for (const image of whyCleanBuildersImages) {
            const sourcePath = path.join(sourceDir, image);
            const optimizedPath = path.join(optimizedDir, `why-${image}`);
            
            if (fs.existsSync(sourcePath)) {
                await sharp(sourcePath)
                    .resize(400, 400, { 
                        fit: 'cover',
                        position: 'center'
                    })
                    .jpeg({ 
                        quality: 85,
                        progressive: true
                    })
                    .toFile(optimizedPath);
                console.log(`✓ Оптимизировано: ${image} -> why-${image}`);
            } else {
                console.log(`⚠ Файл не найден: ${sourcePath}`);
            }
        }

        // Оптимизация для блока Amazing Home Transformations
        console.log('Оптимизирую изображения для блока Transformations (600x400px)...');
        for (const image of transformationsImages) {
            const sourcePath = path.join(sourceDir, image);
            const optimizedPath = path.join(optimizedDir, `transform-${image}`);
            
            if (fs.existsSync(sourcePath)) {
                await sharp(sourcePath)
                    .resize(600, 400, { 
                        fit: 'cover',
                        position: 'center'
                    })
                    .jpeg({ 
                        quality: 85,
                        progressive: true
                    })
                    .toFile(optimizedPath);
                console.log(`✓ Оптимизировано: ${image} -> transform-${image}`);
            } else {
                console.log(`⚠ Файл не найден: ${sourcePath}`);
            }
        }

        // Оптимизация для блока What We Work With
        console.log('Оптимизирую изображения для блока Services (400x250px)...');
        for (const image of servicesImages) {
            const sourcePath = path.join(sourceDir, image);
            const optimizedPath = path.join(optimizedDir, `service-${image}`);
            
            if (fs.existsSync(sourcePath)) {
                await sharp(sourcePath)
                    .resize(400, 250, { 
                        fit: 'cover',
                        position: 'center'
                    })
                    .jpeg({ 
                        quality: 85,
                        progressive: true
                    })
                    .toFile(optimizedPath);
                console.log(`✓ Оптимизировано: ${image} -> service-${image}`);
            } else {
                console.log(`⚠ Файл не найден: ${sourcePath}`);
            }
        }

        console.log('🎉 Оптимизация завершена!');
        
    } catch (error) {
        console.error('❌ Ошибка при оптимизации:', error);
    }
}

optimizeImages(); 
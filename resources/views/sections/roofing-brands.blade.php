<!-- Roofing Brands Section Start -->
<section class="roofing-brands-section section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title mb-4">Our Roofing Brands</h2>
            </div>
        </div>
        <div class="brands-strip">
            <div class="brands-logos">
                <!-- GAF Brand -->
                <div class="brand-item">
                    <img src="{{ asset('assets/images/brand-logo/Gaf.png') }}" alt="GAF Roofing" class="brand-logo">
                    <span class="brand-name">GAF Roofing</span>
                </div>
                <!-- Brand Separator -->
                <div class="brand-separator"></div>
                <!-- CertainTeed Brand -->
                <div class="brand-item">
                    <img src="{{ asset('assets/images/brand-logo/CertainTeedRoofing.png') }}" alt="CertainTeed Roofing" class="brand-logo">
                    <span class="brand-name">CertainTeed</span>
                </div>
                <!-- Brand Separator -->
                <div class="brand-separator"></div>
                <!-- Owens Corning Brand -->
                <div class="brand-item">
                    <img src="{{ asset('assets/images/brand-logo/Owens-Corning-Preferred-Roofing-Contractor.jpg') }}" alt="Owens Corning Roofing" class="brand-logo">
                    <span class="brand-name">Owens Corning</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Roofing Brands Section End -->

<style>
.brands-strip {
    background: #f8f9fa;
    border-radius: 16px;
    padding: 33px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 0;
    box-shadow: 0 2px 16px 0 rgba(60, 120, 60, 0.06);
}
.brands-logos {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    width: 100%;
    gap: 0;
}
.brand-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    min-width: 120px;
    max-width: 220px;
    flex: 1 1 0;
    position: relative;
}
.brand-logo {
    height: 48px;
    width: auto;
    margin-bottom: 8px;
    object-fit: contain;
}
.brand-name {
    font-weight: 600;
    font-size: 1.1rem;
    color: #2c3e50;
    margin-bottom: 0;
}
.brand-separator {
    width: 2px;
    background: linear-gradient(to bottom, #e5e5e5 10%, #c7e6c7 50%, #e5e5e5 90%);
    height: 70px;
    margin: 0 32px;
    align-self: center;
}
@media (max-width: 991px) {
    .brands-logos { flex-direction: column; gap: 32px; }
    .brand-separator { width: 70%; height: 2px; margin: 24px 0; background: linear-gradient(to right, #e5e5e5 10%, #c7e6c7 50%, #e5e5e5 90%); }
}
@media (max-width: 767px) {
    .brands-strip { padding: 20px 0; }
    .brand-logo { height: 36px; }
}
</style> 
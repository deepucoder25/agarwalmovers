<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';
// bihar 
if (strtolower($city) == "") {
   $htmlcontent = "

   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} elseif (strtolower($city) == "") {
   $htmlcontent = "
   
   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} else {
   $htmlcontent = "
   <h2>Packers and Movers in $city</h2>
   <p>Looking for <strong>reliable and professional packers and movers in $city</strong>? Agarwal Topiwala Packers is your trusted partner for seamless relocation services. With years of experience in the moving industry, we understand that relocating to a new place can be stressful. Our team of skilled professionals ensures that your belongings reach their destination safely and on time.</p>
   <p>We offer <strong>comprehensive packing and moving solutions</strong> tailored to meet your specific needs in <strong>$city</strong>. Whether you're planning a residential move, relocating your office, or transporting your vehicle, our expert team handles every aspect of your relocation with utmost care and precision.</p>
   ";
   $htmlcontent1 = "
   <h3>Household Shifting Services in $city</h3>
   <p>Moving your home requires careful planning and execution. At Agarwal Topiwala Packers, we specialize in <strong>household shifting services</strong> that make your residential relocation hassle-free. Our trained staff uses <strong>high-quality packing materials</strong> to ensure the safety of your belongings, from delicate glassware to heavy furniture.</p>
   <p>Our household shifting process begins with a thorough assessment of your moving requirements. We provide customized packing solutions using durable boxes, bubble wrap, and protective padding for fragile items. Our experienced team carefully loads, transports, and unloads your household goods with attention to detail.</p>
   <p>We handle all types of <strong>home relocations in $city</strong>, including apartment moves, villa shifting, and independent house relocations. Our comprehensive home shifting service includes <strong>furniture disassembly and reassembly</strong>, ensuring that your items fit perfectly through doorways and stairways. We also offer unpacking services to help you settle into your new home quickly.</p>
   <p>Safety is our top priority during household moves. We use specialized equipment and techniques to protect your valuable possessions throughout the journey. Our fleet of <strong>well-maintained vehicles</strong> ensures smooth transportation, and our team works efficiently to complete your move within the scheduled timeframe.</p>
   ";
   $htmlcontent2 = "
   <h3>Office Relocation Services in $city</h3>
   <p>Relocating an office requires minimal downtime and maximum efficiency. Agarwal Topiwala Packers offers <strong>professional office relocation services in $city</strong> designed to keep your business operations running smoothly. We understand that time is money in the corporate world, and our streamlined moving process ensures a quick transition to your new workspace.</p>
   <p>Our <strong>office moving services</strong> cover everything from packing office equipment and furniture to safely transporting sensitive electronic devices and important documents. We create a detailed moving plan that aligns with your business schedule, allowing you to relocate during weekends or after business hours to minimize disruption.</p>
   <p>We have extensive experience handling various office items, including workstations, conference tables, filing cabinets, computers, servers, and specialized equipment. Our team uses <strong>anti-static packing materials</strong> for electronic items and secure containers for confidential documents. We label and organize everything systematically to ensure easy setup at your new office location.</p>
   <p>Whether you're moving a small startup office or a <strong>large corporate setup in $city</strong>, we have the expertise and resources to manage projects of any scale. Our efficient team works diligently to ensure that your office is up and running at the new location with minimal delay, allowing your business to resume operations swiftly.</p>
      ";
   $htmlcontent3 = "
   <h3>Car Transportation Services in $city</h3>
   <p>Transporting your vehicle safely to a new location is a specialized task that requires professional handling. Agarwal Topiwala Packers provides <strong>secure and reliable car transportation services in $city</strong>. We use modern car carriers and enclosed trailers to protect your vehicle from weather conditions and road debris during transit.</p>
   <p>Our <strong>car transportation service</strong> includes <strong>door-to-door pickup and delivery</strong>, eliminating the need for you to drive your vehicle to a terminal. Before loading, our team conducts a thorough inspection of your car and documents its condition. We provide comprehensive insurance coverage options for added peace of mind during transportation.</p>
   <p>We transport all types of vehicles, including sedans, SUVs, luxury cars, and even motorcycles. Our professional drivers are trained in safe vehicle handling and follow the best routes to ensure timely delivery. Throughout the transportation process, you can track your vehicle's location and receive regular updates.</p>
   <p>Whether you're relocating within <strong>$city</strong> or moving to another city, our car transportation service ensures that your vehicle arrives at the destination in the same condition it was picked up. We use hydraulic lifts and proper securing mechanisms to prevent any damage during loading, transit, and unloading.</p>
   ";
   $htmlcontent4 = "
   <h4>Professional Packing and Moving in $city</h4>
   <p>At Agarwal Topiwala Packers, we pride ourselves on delivering <strong>exceptional packing and moving services</strong> throughout <strong>$city</strong>. Our comprehensive approach combines industry expertise with customer-focused solutions. We use the latest packing techniques and quality materials to ensure the complete safety of your belongings.</p>
   <p>Our team of <strong>trained professionals</strong> brings years of moving experience to every project. We understand the unique challenges of relocating in <strong>$city</strong>, from navigating busy streets to managing parking logistics. Our local knowledge helps us plan the most efficient routes and schedules for your move.</p>
   <p>We maintain a modern fleet of <strong>GPS-enabled vehicles</strong> in various sizes to accommodate moves of all scales. From small apartment relocations to large villa shifting, we have the right resources to handle your requirements. Our vehicles are regularly serviced and equipped with safety features to protect your goods during transportation.</p>
   <p>Transparency and reliability are the cornerstones of our service. We provide <strong>upfront pricing with no hidden charges</strong>, and our team maintains clear communication throughout the moving process. From the initial consultation to the final delivery, we keep you informed at every step.</p>
   ";
   $htmlcontent5 = "
   <h5>Complete Moving Solutions in $city</h5>
   <p>Agarwal Topiwala Packers offers <strong>end-to-end moving solutions</strong> that cover every aspect of your relocation in <strong>$city</strong>. Our services include professional packing, secure loading, safe transportation, careful unloading, and organized unpacking. We also provide additional services such as <strong>storage solutions</strong> for customers who need temporary warehousing facilities.</p>
   <p>Our commitment to quality service has made us a <strong>preferred choice for packers and movers in $city</strong>. We invest in ongoing training for our staff to ensure they stay updated with the latest moving techniques and safety protocols. Our customer support team is available to address your queries and provide assistance whenever you need it.</p>
   <p>Whether you're planning a <strong>local move within $city</strong> or a long-distance relocation, Agarwal Topiwala Packers has the expertise and infrastructure to make your move successful. We treat your belongings with the same care we would give our own, ensuring a <strong>stress-free moving experience</strong> from start to finish.</p>
   <p>Trust <strong>Agarwal Topiwala Packers</strong> for all your packing and moving needs in <strong>$city</strong>. Our dedication to customer satisfaction, combined with our professional approach and affordable pricing, makes us the ideal partner for your next relocation. Experience the difference of working with a moving company that truly cares about your moving success.</p>
   ";
}
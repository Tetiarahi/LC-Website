<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Models\Commissioner;
use App\Models\News;
use App\Models\ContactSetting;
use App\Models\SiteSetting;
use App\Models\Page;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        Slider::insert([
            ['title' => null, 'subtitle' => null, 'image' => 'slider1.jpg', 'link' => null, 'sort_order' => 1, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Strategic Plan Launching', 'subtitle' => null, 'image' => 'slider2.jpg', 'link' => null, 'sort_order' => 2, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['title' => null, 'subtitle' => null, 'image' => 'slider3.jpg', 'link' => null, 'sort_order' => 3, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['title' => null, 'subtitle' => null, 'image' => 'slider4.jpg', 'link' => null, 'sort_order' => 4, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['title' => null, 'subtitle' => null, 'image' => 'slider5.jpg', 'link' => null, 'sort_order' => 5, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Commissioner::insert([
            ['name' => 'Taoaba Bakatu Kaiea', 'title' => 'Chairman', 'email' => 'chairman@lc.org.ki', 'photo' => 'chairman.jpg', 'bio' => null, 'is_chairman' => true, 'is_former' => false, 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mareko Tekarika', 'title' => 'Commissioner', 'email' => 'mcommissioner@lc.org.ki', 'photo' => 'commissioner1.jpg', 'bio' => null, 'is_chairman' => false, 'is_former' => false, 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tererei Abete', 'title' => 'Commissioner', 'email' => 'tcommissioner@lc.org.ki', 'photo' => 'commissioner2.jpg', 'bio' => null, 'is_chairman' => false, 'is_former' => false, 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);

        News::insert([
            [
                'title' => 'SOI E-Submission Portal',
                'slug' => 'soi-e-submission-portal',
                'excerpt' => 'A secure online system for leaders to submit their Statement of Interests.',
                'content' => '<p>A secure online system for leaders to submit their Statement of Interests, including assets, money, real estate, business interests, liabilities, gifts, and other confidential declarations.</p>',
                'image' => null,
                'category' => 'Uncategorised',
                'author' => 'Administrator',
                'is_published' => true,
                'published_at' => '2026-05-14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Reminder for SOI SUBMISSION FORM',
                'slug' => 'reminder-for-soi-submission-form',
                'excerpt' => 'KATANOATA NI KAURING IAON KANOAKIN TE SOI FORM',
                'content' => '<p>KATANOATA NI KAURING IAON KANOAKIN TE SOI FORM</p>',
                'image' => null,
                'category' => 'Announcements',
                'author' => 'Administrator',
                'is_published' => true,
                'published_at' => '2026-02-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'LAUNCHING OF Strategic Plan',
                'slug' => 'launching-of-strategic-plan',
                'excerpt' => 'Leadership Commission Launches Strategic Plan 2026-2029.',
                'content' => '<p>Leadership Commission Launches Strategic Plan 2026-2029.</p>',
                'image' => null,
                'category' => 'News & Media',
                'author' => 'Administrator',
                'is_published' => true,
                'published_at' => '2026-02-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        ContactSetting::insert([
            [
                'id' => 1,
                'phone' => '75022372',
                'phone2' => '75022373',
                'toll_free' => '456',
                'email' => 'reportcorruption@lc.org.ki',
                'address' => 'Bairiki, Between PSC and OAG, Tarawa, Kiribati',
                'pobox' => '184',
                'office_hours' => 'Mon-Fri 9:00am - 5:15pm',
                'facebook_url' => 'https://www.facebook.com/profile.php?id=100079776834765',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        SiteSetting::insert([
            ['key' => 'site_name', 'value' => 'Leadership Commission', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'site_tagline', 'value' => 'Serving People with Respect and Integrity', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'logo', 'value' => 'images/logo.png', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'footer_text', 'value' => '© 2026 Leadership Commission. All Rights Reserved. Designed By LC IT', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'chairman_message', 'value' => '<p>N arana ae tabu ao kam na bane ni Mauri.</p><p>I am deeply honored and privileged to present to the people of Kiribati and the government the third four-year Strategic Plan for the period 2026 to 2029.</p><p>I extend my sincere appreciation for the hard work and steadfast dedication of the Commissioners, management, and staff of the Leadership Commission, who gave their utmost to ensure the successful development of this strategic plan, which will guide the Commission activities over the next four years.</p><p>Building upon the first strategic focus, which established the foundation for the newly formed Leadership Commission, and the second, which concentrated on enhancing institutional efficiency and effectiveness in combating and preventing corruption, this third Strategic Plan maintains the same strategic direction. However, it places greater emphasis on leveraging technology and digital solutions, while strengthening partnerships both domestically, regionally and internationally.</p><p>These initiatives are designed to combat, prevent, and mitigate corruption across all sectors, including addressing its environmental consequences, in pursuit of a sustainable and corruption-free society.</p><p>I commend the collaborative spirit demonstrated by all and encourage continued unity in pursuing our shared objectives.</p><p>Together, we will achieve the strategic goals of our Leadership Commission in service to the government and the people of Kiribati.</p><p>Te Mauri, Te Raoi ao Te Tabomoa.</p>', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'about_description', 'value' => '<p>Leadership Commission of Kiribati was established in March 2018 under the Leaders code of Conduct Act 2016, with a mandate to promote integrity, accountability, and ethical leadership in public office. Guided by its vision of achieving a corruption-free Kiribati by 2036, the commission has worked to strengthen governance systems, enhance public awareness, and build public confidence in leadership accountability.</p>', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'vision', 'value' => 'Kiribati to be a corruption free nation by 2036', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'mission', 'value' => 'Strengthen partnerships and collaborative networks while advancing education and awareness, leveraging data, technology, and digital transformation to drive effective implementation and enforcement, and fostering institutional excellence through sustainable human resource development.', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'strategic_plan_text', 'value' => 'LC STRATEGIC PLAN (2026-2029) LAUNCHING', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Page::insert([
            [
                'title' => 'Commission Matters',
                'slug' => 'commission-matters',
                'content' => '<h3>LEADERS CODE OF CONDUCT ACT 2016</h4><h5>This Act may be cited as the Leaders Code of Conduct Act 2016.</h5><h4>Policy</h4><p>The Maneaba ni Maungatabu declares and recognises the right of the people of Kiribati to a responsible and ethical government and the obligation of the government to take every step reasonable and necessary to conduct government in accordance with the Constitution and the Laws of Kiribati.</p><p>The essence of holding public office is the duty of trust which is attached to the office. Public Office Holders, as Leaders, have the duty to uphold the dignity and independence of their offices, to discharge their duties with a strong sense of commitment to the public interest and to steer clear of decisions that are motivated by self-interest.</p><h4>Definitions</h4><p><strong>Custom</strong> means a tradition, practice or usage that is generally accepted as morally binding within the community.</p><p><strong>Financial gain</strong> means making a profit or avoiding or reducing a loss.</p><p><strong>Gift</strong> means the transfer of something of value without recompense and as a gesture of friendship.</p><p><strong>Government agency</strong> includes Ministries, Government Departments and all State Owned Enterprises.</p><p><strong>Immediate family</strong> includes parents, grandparents, spouse, children, grandchildren, brothers and sisters.</p><p><strong>Interest in a matter</strong> means a person owns directly or indirectly property or assets of any kind related to the matter or has a beneficial interest of any kind in that matter.</p><p><strong>Leader</strong> includes a person who currently holds any of the following positions:<br>1. Te Beretitenti<br>2. Kauoman ni Beretitenti<br>3. Minister<br>4. Speaker, Clerk of the Maneaba ni Maungatabu<br>5. Member of the Maneaba ni Maungatabu<br>6. Attorney General, Solicitor General, Director of Public Prosecution<br>7. Chief Justice, Judge, Magistrate, Registrar of Court</p><p><strong>Violation</strong> of this Code means any conduct that infringes any of the provisions of this Code.</p>',
                'meta_description' => 'Leaders Code of Conduct Act 2016',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Report Corruption',
                'slug' => 'report-corruption',
                'content' => '<h3>REPORTING CORRUPTION</h3><h4>Who can lodge a complaint?</h4><p>Complaints can be submitted using any of the following details:</p><ul><li>Telephone: 75022372 / 75033373</li><li>Toll-Free Hotline: 456</li><li>Email: reportcorruption@lc.org.ki</li><li>Physical address: Bairiki, located between the Office of the Attorney General(OAG) and Public Service Commission (PSC)</li></ul><p><a href="https://forms.office.com/r/Zjz2SSEgbC" class="btn btn-danger">Report it</a></p>',
                'meta_description' => 'Report Corruption to the Leadership Commission',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Overview of the LC',
                'slug' => 'overview-of-the-lc',
                'content' => '<h4>UNDERSTANDING OUR LOGO</h4><p><em>The Leadership Commission logo represents our commitment to integrity, accountability, transparency, and ethical leadership in Kiribati. Each element of the logo carries a special meaning that reflects our mission and values.</em></p><h3>Below are the individual layers of the logo, separated and labeled for easy identification.</h3><h5>1. Shield</h5><p>Represent protection and accountability, showing that leaders must safeguard the people, the laws, and the integrity of the nation.</p><h5>2. Frigate Bird</h5><p>A symbol of freedom, vigilance, and leadership. The frigate bird (te eitei) soars high and sees far, reflecting a leader\'s vision, wisdom, and guidance.</p><h5>3. Sun</h5><p>Symbolizes hope, enlightenment, and new beginnings, shining light on truth and justice.</p><h5>4. Leaves</h5><p>Olive tree same meaning with 4. Leaves</p><h5>5. Guiding Stars</h5><p>Stand for guidance, direction, and wisdom. Just as Kiribati navigators once followed the stars to find their way across the ocean, leaders are reminded to stay true to their moral compass and the nation\'s values.</p><h5>6. Circle Ring</h5><p>The circle represents wholeness, unity, and continuity.</p><h5>7. Sky Blue</h5><p>Symbolizes hope, clarity, and peace.</p><h5>8. Braided Rope</h5><p>Represents Unity, strength, and connection. In Kiribati Culture, it symbolizes the bond of people working together.</p><h5>9. Golden Cross</h5><p>Symbolizes faith in God and moral integrity</p><h5>10. Colors inside the SHIELD</h5><p>Colors of Kiribati Flag - Red Symbolizes courage, authority, and commitment to serve with honesty. White Stands for purity, peace, and integrity, key values in leadership. Blue Represents the ocean and truth, reminding leaders to stay grounded in the nation\'s identity and uphold transparency.</p><h5>11. Balance Scale</h5><p>Represents justice, fairness, and equality, core principles of good governance.</p>',
                'meta_description' => 'Overview of the Leadership Commission',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contact',
                'slug' => 'contact',
                'content' => '<p>Get in touch with the Leadership Commission of Kiribati for general enquiries, complaints, appointments, or assistance with our services.</p>',
                'meta_description' => 'Contact the Leadership Commission',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

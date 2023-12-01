use Project;
create table company(
sname varchar(30),
email text,
phone bigint(20),
address text
);

INSERT INTO company values('INFOSYS','foundation@infosys.com',914424509530,'138, Old Mahabalipuram Road,Sholinganallur, Chennai,Tamil Nadu – 600119.'),
						  ('TechMahindra','alliances@techmahindra.com', 080-67807777,'Tech Mahindra Ltd Plot No.45 - 47, KIADB Industrial Area, Phase - II, Electronic City'),
                          ('HCL Tech','hclfoundation@hcl.com',01204306000,'HCL Technologies Ltd. Technology Hub, SEZ Plot No. 3A, Sector 126 Noida – 201304, India'),
                          ('IBM','infoibm@us.ibm.com',18004262255,'IBM India Pvt Ltd No.12, Subramanya Arcade, Bannerghatta Main Road, Bengaluru India - 560 029'),
                          ('WIPRO','reachus@wipro.com', 918028440011,'Wipro Limited Doddakannelli, Sarjapur Road Bengaluru - 560 035'),
                          ('GOOGLE',' support-in@google.com',1-800-419-0157,'1600 Amphitheatre Parkway,Mountain View, CA 94043, USA'),
                          ('ACCENTURE','uki.peopleline.hr@accenture.com.',1-312-842-5012,'Prestige Technopolis, 1/8, Dr. MH Maregowda Road, Audugodi, Bengaluru, Karnataka, India, 560029'),
                          ('MICROSOFT','narao@microsoft.com',000-8000-40-454,'Microsoft Corporation India Pvt. Ltd. The Executive Centre, Level 3 B/8, DLF Center, Sansad Marg, Connaught Place, New Delhi – 110010, India..'),
                          ('AMAZON','cs-reply@amazon.com',1-888-280-4331,' 410 Terry Ave N, Seattle 98109, WA'),
                          ('APPLE','contactus.uk@euro.apple.com.',000800-040-1977,'Cupertino, California, United States.');
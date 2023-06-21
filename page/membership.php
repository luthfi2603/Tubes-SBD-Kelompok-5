<div class="main-body-container skin">
	<div class="body-wrapper">
		<div class="membership-body">
			<section id="section-1">
				<div class="section_1_content">
					<img src="./assets/images/CRM Page logo CGV.svg" alt="CGV Logo" width="100">
					<div class="page_headline">
						<img src="./assets/images/CRM-Page-Headline.png" alt="" style="width: 80%;">
					</div>
					<div class="pacowhell">
						<img src="./assets/images/CRM-PacoWheel section 1.png" alt="" style="width: 50%;">
					</div>
					<div class="wording">
						Dapatkan beragam penawaran dan promosi menarik hingga tiket nonton GRATIS!
					</div>
					<div class="button-action">
						<button type="button" onclick="window.open('/cgv/?p=register')">
							Daftar Sekarang
						</button>
					</div>
					<div class="grid btn-download-app-section">
						<div class="col-6 btn-download-app">
							<a href="https://itunes.apple.com/id/app/cgv-blitz/id781405923?mt=8" target="_blank">
								<img src="./assets/images/CRM-Page-AppStore.svg" alt="">
							</a>
						</div>
						<div class="col-6 btn-download-app">
							<a href="https://play.google.com/store/apps/details?id=com.blitz.blitzandapp1&amp;utm_source=global_co&amp;utm_medium=prtnr&amp;utm_content=Mar2515&amp;utm_campaign=PartBadge&amp;pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" target="_blank">
								<img src="./assets/images/CRM-Page-PlayStore.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</section>
			<section id="section-2">
				<div class="section_2_content">
					<div class="section-title-crm">
						Mudah menjadi CGV Member!
					</div>

					<div class="grid">
						<div class="col-4">
							<div class="">
								<div class="image-paconnie-section-2">
									<img src="./assets/images/CRM-Page-icon1 section2.svg" alt="" width="100%">
								</div>
								<div class="desc-paconnie-section-2">
									Buat atau masuk ke akun <br>CGV Member
									<div>
										<a href="/cgv/?p=login">Klik di sini.</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="">
								<div class="image-paconnie-section-2">
									<img src="./assets/images/CRM-Page-icon2 section2.svg" alt="" width="100%">
								</div>
								<div class="desc-paconnie-section-2">
									Lakukan transaksi dengan <br>CGV Member
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="">
								<div class="image-paconnie-section-2"><img src="./assets/images/CRM-Page-icon3 section2.svg" alt="" width="100%"></div>
								<div class="desc-paconnie-section-2">Kumpulkan dan tukarkan <br>CGV Point kamu!</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="section-3">
				<div class="section_3_content">
					<div class="section-title-crm">
						Cari tahu Level CGV Membermu!
					</div>
					<div class="row">
						<div class="col-12">
							<img src="./assets/images/CRM-Page-Table-section3.png" alt="" width="75%">
						</div>
					</div>
				</div>
			</section>
			<section id="section-4">
				<div class="section_4_content">
					<div class="section-title-crm">
						FAQ
					</div>
					<div class="row text-left">
						<div class="col-12">
							<div class="tabs">
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-1" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-1">
										Apa itu CGV Member?
									</label>
									<div class="tab-content">
										<b>CGV Member</b> adalah program keanggotaan khusus untuk pelanggan setia CGV Cinemas. Dengan menjadi Member, kamu akan mendapatkan cashback berupa <b>CGV Point</b> untuk setiap transaksi di CGV Cinemas.
									</div>
								</div>
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-2" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-2">
										Bagaimana jika lupa password CGV Member?
									</label>
									<div class="tab-content">
										<ol class="list-decimal">
											<li>Klik “FORGOT PASSWORD” lalu masukkan email yang terdaftar. </li>
											<li>Pilih cara untuk mengirim kode One Time Password (OTP), bisa melalui sms ke nomor handphone yang kamu daftarkan ataupun email. </li>
											<li>Kemudian masukkan kode tersebut pada kolom yang disediakan. </li>
											<li>Masukan kode password baru di kolom yang tersedia.</li>
										</ol>
									</div>
								</div>
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-3" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-3">
										Apa itu CGV Point?
									</label>
									<div class="tab-content">
										<p>
											CGV Point adalah point yang kamu dapatkan setiap melakukan transaksi di CGV Cinemas dengan menggunakan CGV Member. Besaran point yang didapatkan akan berbeda-beda tergantung level CGV Member kamu. Pelajari lebih lanjut di <a href="#level-cgv-member" @click="scrollIntoLevelCgvMember">Level CGV Member</a>.
										</p>
										<p>
											<b>Setiap 1 CGV Point bernilai Rp 1,- </b> dan dapat kamu tukarkan dengan produk CGV apapun yang setara nilainya dengan point yang kamu miliki.
										</p>
										<p>
											Maksimal CGV Point yang dapat diklaim dalam satu hari adalah sebanyak 5 transaksi atau senilai Rp 1.000.000. Sedangkan batas maksimal CGV Point yang dapat ditukarkan menjadi hadiah hanya 500.000 point per hari.
										</p>
									</div>
								</div>
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-4" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-4">
										Bagaimana cara untuk klaim CGV Point secara langsung di CGV Cinemas?
									</label>
									<div class="tab-content">
										<ol class="list-decimal">
											<li>
												Pastikan kamu masih menyimpan struk transaksi atau bukti print tiket kamu.
											</li>
											<li>
												Kunjungi lokasi CGV Cinemas terdekat, lalu berikan struk atau tiket beserta nomor handphone atau CGV Member kamu kepada staff.
											</li>
											<li>
												Penukaran point dapat dilakukan segera setelah melakukan transaksi atau maksimal 3 hari setelah transaksi.
											</li>
										</ol>
									</div>
								</div>
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-5" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-5">
										Apakah transaksi melalui partner resmi CGV bisa mendapatkan CGV Point?
									</label>
									<div class="tab-content">
										<p>
											CGV Cinemas bekerja sama dengan beberapa partner untuk penjualan tiket bioskop seperti TIX.ID, GO-TIX, BCA Lifestyle, dan Shopee.
										</p>
										<p>
											Kamu dapat menukarkan tiket yang kamu beli melalui partner resmi dengan cara berikut:
										</p>
										<ol class="list-decimal">
											<li>
												Cetak bukti pembelian tiketmu. Proses ini wajib kamu lakukan, karena CGV Cinemas tidak menerima bukti secara online.
											</li>
											<li>
												Kunjungi lokasi CGV Cinemas terdekat, lalu berikan bukti pembelian tiket tersebut dan nomor handphone atau CGV Member kamu kepada staff.
											</li>
											<li>
												Penukaran tiket dengan CGV Point dapat dilakukan segera setelah melakukan transaksi atau maksimal 3 hari setelah transaksi.
											</li>
											<li>
												Besaran cashback CGV Point yang akan kamu dapatkan sebesar 1% dari total nilai transaksi yang tertera di bukti pembelian tiketmu.
											</li>
										</ol>
									</div>
								</div>
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-6" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-6">
										Bagaimana cara naik level di CGV Member?
									</label>
									<div class="tab-content">
										<p>
											Untuk naik level dari General Member ke VIP Member, kamu hanya perlu melakukan <b>transaksi untuk produk apapun di CGV Cinemas minimal Rp 1,000,000 selama 1 tahun terakhir.</b> Setiap awal bulannya sistem secara otomatis akan menghitung nilai transaksi 1 tahun terakhir kamu. Proses kenaikan dan penurunan level akan dilakukan setiap bulan, pastikan nilai transaksi kamu cukup untuk mempertahankan level kamu!
										</p>
									</div>
								</div>
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-7" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-7">
										Bagaimana cara menambahkan kartu CGV Member ke dalam satu akun?
									</label>
									<div class="tab-content">
										<p>
											Bagi kamu yang mendaftar secara online akan otomatis memiliki e-card, namun tidak menutup kemungkinan kamu bisa mendapatkan kartu fisik CGV Member saat program tertentu. Kamu bisa menambahkan maksimum 5 (lima) kartu CGV member dalam satu akun atau satu email yang sama.
										</p>
										<p>
											Cara menambahkan kartu pada akun CGV Member:
										</p>
										<ol class="list-decimal">
											<li>
												Masuk ke halaman My CGV di aplikasi dengan melakukan Login atau Register terlebih dahulu.
											</li>
											<li>
												Pada halaman My CGV pilih menu “MANAGE CARD”.
											</li>
											<li>
												Klik tanda + yang tertera di bagian paling atas halaman.
											</li>
											<li>
												Masukkan 16 Digit nomor CGV Member yang tertera di kartumu.
											</li>
											<li>
												Kartu kamu sudah berhasil terhubung dengan akun CGV Member!
											</li>
										</ol>
									</div>
								</div>
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-8" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-8">
										Bagaimana cara menggunakan Voucher?
									</label>
									<div class="tab-content">
										<p>
											Tunjukkan Voucher yang kamu miliki kepada staff CGV Cinemas atau ikuti cara berikut ini:
										</p>
										<ol class="list-decimal">
											<li>
												Masuk ke halaman My CGV di aplikasi dengan melakukan Login atau Register terlebih dahulu.
											</li>
											<li>
												Pada halaman My CGV, pilih menu “E-VOUCHER” lalu klik tombol “+NEW” di bagian atas halaman.
											</li>
											<li>
												Masukan kode voucher beserta PIN yang terdapat di vouchermu.
											</li>
											<li>
												Voucher akan tersedia di halaman “VOUCHER” dan voucher dapat segera digunakan!
											</li>
										</ol>
									</div>
								</div>
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-9" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-9">
										Bagaimana cara menggunakan Kupon Promo?
									</label>
									<div class="tab-content">
										<p>
											Tunjukkan Kupon Promo yang kamu miliki kepada staff CGV Cinemas atau ikuti cara berikut ini:
										</p>
										<ol class="list-decimal">
											<li>
												Masuk ke halaman My CGV di aplikasi dengan melakukan Login atau Register terlebih dahulu.
											</li>
											<li>
												Pada halaman My CGV, pilih menu “E-COUPON” lalu klik tombol “+NEW” di bagian atas halaman.
											</li>
											<li>
												Masukan kode kupon di kolom yang tersedia.
											</li>
											<li>
												Kupon akan masuk ke halaman “COUPON” dan kupon dapat segera digunakan!
											</li>
										</ol>
									</div>
								</div>
								<div class="tab">
									<input class="payment-options-check" type="radio" id="faq-10" name="faq-benefit" v-on:change="resetMaxHeightPanel($event)">
									<label class="tab-label" for="faq-10">
										Bagaimana cara menghubungi kami?
									</label>
									<div class="tab-content">
										<p>
											Jika kamu masih memiliki pertanyaan lebih lanjut, kirimkan pertanyaanmu melalui email <a href="mailto:callcenter@cgv.id">callcenter@cgv.id</a> atau kunjungi bagian Guest Service di lokasi CGV Cinemas terdekat.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
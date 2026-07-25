@extends('layouts.app')
@section('content')

<!-- ============ HERO ============ -->
<section class="hero" id="top">
  <div class="wrap">
   <div class="hero-split">
    <div>
    <div class="presence rv"><i aria-hidden="true"></i>A real person is online now — replies in under 1 hour</div>
    <span class="eyebrow rv">For dentists tired of half-empty days</span>
    <h1 class="rv">Your chairs should be <span class="u">full.</span></h1>
    <p class="lede rv">Every week, patients slip past your practice — the missed call at lunch, the slow website they bounced from, the 400 people in your system who haven't been back in a year. You can't see the leak. We can. And we plug it.</p>
    <div class="hero-cta rv">
      <a class="btn pulse" href="#book">Show me where I'm losing patients →</a>
      <span class="micro" style="color: #fff;">Free · 15 minutes · no pitch, just your numbers</span>
    </div>
    <p class="orpath rv">Not ready to book? <a href="#" class="open-lead-modal">Send us your website URL</a> and we'll reply with 3 leaks — free, no call needed. Even if you never hire us.</p>
    <div class="halo rv" aria-label="Trust badges">
      <span class="b"><i aria-hidden="true">◆</i> No Long-Term Contracts</span>
      <span class="b"><i aria-hidden="true">◆</i> Month-to-Month</span>
      <span class="b"><i aria-hidden="true">◆</i> Cancel Anytime</span>
      <span class="b"><i aria-hidden="true">◆</i> 50% Upfront, 50% at Launch</span>
      <span class="b"><i aria-hidden="true">◆</i> You Own Everything</span>
      <span class="b"><i aria-hidden="true">◆</i> No Lock-In Contracts</span>
    </div>
    </div>

    <!-- 🖼️ HERO IMAGE — best choice: a real, warm photo of a modern dental operatory or a dentist with a patient. Replace the <span class="ph"> line with: <img src="images/hero-practice.jpg" alt="Modern dental practice"> -->
    <div class="hero-visual rv">
      <div class="imgslot r43">
        <span class="ph">🖼️ HERO IMAGE<br>1200×900px<br>Real dental operatory or dentist + patient<br>(warm, bright, real — not stock handshakes)</span>
      </div>
      <div class="hero-badge"><b>14 days</b>from kickoff to live</div>
    </div>
   </div>
  </div>
</section>

<!-- ============ UNITY — shared identity ============ -->
<section class="unity" style="padding-block:0">
  <div class="wrap unity-in rv">
    <span class="mk">We only build for dentists.</span>
    <p>So we already speak your language — <b>PPO write-offs, recall gaps, chair-time economics, no-show rates, the D-codes on your day sheet.</b> You won't spend the first month teaching an agency how a dental practice actually makes money. We've done this for practices like yours before.</p>
  </div>
</section>

<!-- ============ LEAK METER — problems they don't see ============ -->
<section class="leak" id="leaks">
  <div class="wrap">
    <span class="eyebrow rv">The leaks you can't see from the chair</span>
    <h2 class="rv">You're a great dentist. That was never the problem.</h2>
    <p class="sub rv">The problem is quiet. It doesn't show up in your day — it shows up in the patients who never make it to your day. Here's where they're going.</p>

    <div class="meter">
      <div class="leak-card rv">
        <span class="hidden-tag">UNSEEN</span>
        <h3>The calls nobody answered</h3>
        <p>When your front desk is with a patient, the phone rings out. That caller doesn't leave a voicemail — they call the next dentist on Google.</p>
        <div class="stat">Practices miss 25–35% of inbound calls</div>
      </div>
      <div class="leak-card rv">
        <span class="hidden-tag">UNSEEN</span>
        <h3>The site they left in 3 seconds</h3>
        <p>Your website loads slowly on a phone, so new patients bounce before they ever see your smile-gallery. You never even know they came.</p>
        <div class="stat">A slow mobile site can cost 20–30% of new-patient traffic</div>
      </div>
      <div class="leak-card rv">
        <span class="hidden-tag">UNSEEN</span>
        <h3>The patients you already earned</h3>
        <p>Hundreds of past patients haven't rebooked in 12–18 months. They still trust you — they just forgot to come back, and nobody reminded them.</p>
        <div class="stat">Most practices sit on 300–1,000+ dormant patients</div>
      </div>
      <div class="leak-card rv">
        <span class="hidden-tag">UNSEEN</span>
        <h3>The map you're not on</h3>
        <p>When someone searches "dentist near me," three practices show up first — and you're not one of them. That's not luck. It's fixable.</p>
        <div class="stat">The top 3 map results take the majority of local clicks</div>
      </div>
    </div>

    <div class="leak-total rv">
      <p><b>Add it up.</b> A handful of missed calls, a few bounced visitors, and an untouched patient list — that's not a slow month. That's real revenue leaving your practice every single week, silently.</p>
      <span class="big">So let's find your number. ↓</span>
    </div>
  </div>
</section>

<!-- ============ ROI CALCULATOR — the math, using their own numbers ============ -->
<section class="roi" id="math">
  <div class="wrap">
    <span class="eyebrow rv">The math your current agency won't show you</span>
    <h2 class="rv">Your leak, in dollars. Move the sliders.</h2>
    <p class="sub rv">These are your numbers, not ours — set them to your practice. We're only showing what happens when a share of what you're already losing gets recovered.</p>

    <div class="calc rv">
      <div class="calc-inputs">
        <div class="field">
          <label for="calls">Calls you miss each month <span class="val" id="calls-v">45</span></label>
          <input type="range" id="calls" min="10" max="150" value="45" step="5">
          <div class="hint">Most practices miss 25–35% of inbound calls</div>
        </div>
        <div class="field">
          <label for="value">Average value of a new patient <span class="val" id="value-v">$1,200</span></label>
          <input type="range" id="value" min="300" max="5000" value="1200" step="100">
          <div class="hint">A single implant case can be $4,000–5,000+</div>
        </div>
        <div class="field">
          <label for="recover">Share we help you recover <span class="val" id="recover-v">30%</span></label>
          <input type="range" id="recover" min="10" max="60" value="30" step="5">
          <div class="hint">Missed-call text-back + reminders + reactivation</div>
        </div>
      </div>
      <div class="calc-out">
        <span class="cap">Revenue currently leaking</span>
        <span class="num" id="leak-num">$4,050</span>
        <span class="per">PER MONTH · YOUR NUMBERS</span>
        <div class="foot">That's <b id="year-num">$48,600</b> a year walking out the door — while a plan to stop it costs <b>less than one recovered patient.</b></div>
      </div>
    </div>
    <p class="calc-note rv">Illustrative model based on the inputs you set — not a guarantee. On the call, we build it around your real practice data.</p>

    <div class="reframe rv">
      <b>And this isn't about more cleanings.</b> The Patient Engine is calibrated to surface and close your <b>high-margin cases</b> — implants, Invisalign, cosmetic work. A single implant case is worth roughly <b>$4,000–$5,000</b>, so this doesn't need miracles: recover <b>one</b> and it more than pays for itself.
    </div>
  </div>
</section>

<!-- ============ COST OF INACTION — agitate the future ============ -->
<section class="coi" id="inaction">
  <div class="wrap narrow">
    <span class="eyebrow rv">The part nobody likes to think about</span>
    <h2 class="rv">The leak doesn't pause because you're busy.</h2>
    <p class="sub rv" style="color:rgba(245,247,243,.7);margin-top:1rem">Here's what quietly happens over the next 30 days if nothing changes:</p>

    <div class="coi-list">
      <div class="coi-item rv"><span class="x" aria-hidden="true">✕</span><p>Another <b>~12–18 calls</b> ring out to voicemail — and those callers book elsewhere.</p></div>
      <div class="coi-item rv"><span class="x" aria-hidden="true">✕</span><p>Dozens more new patients bounce off a slow site before they ever see your name.</p></div>
      <div class="coi-item rv"><span class="x" aria-hidden="true">✕</span><p>Your dormant patient list gets <b>one month older</b> — and colder.</p></div>
      <div class="coi-item rv"><span class="x" aria-hidden="true">✕</span><p>The practice down the road gets <b>one more month ahead</b> of you.</p></div>
    </div>
    <p class="coi-kick rv">None of this shows up in your day. It only shows up in the year.</p>
  </div>
</section>

<!-- ============ DREAM — future pacing ============ -->
<section class="dream" id="dream">
  <div class="wrap narrow">
    <span class="eyebrow rv">Now picture the other version</span>
    <h2 class="rv">Imagine walking in on Monday to this.</h2>
    <p class="sub rv">Because it was never only about the money. It's the quiet stress of a half-empty schedule, a front desk buried in reminder calls, the mental load you carry home. Imagine that lifting — same practice, same you, just a system doing the heavy lifting while you sleep.</p>

    <div class="dream-list">
      <div class="dream-item rv"><span class="tick" aria-hidden="true">✓</span><p>Your schedule is <b>full a week out</b> — new patients, recalls, and reactivated ones you'd written off.</p></div>
      <div class="dream-item rv"><span class="tick" aria-hidden="true">✓</span><p>Every missed call gets <b>an instant text back</b>, so the patient books with you instead of the dentist down the road.</p></div>
      <div class="dream-item rv"><span class="tick" aria-hidden="true">✓</span><p>You show up <b>first on Google</b> when your neighbourhood searches for a dentist.</p></div>
      <div class="dream-item rv"><span class="tick" aria-hidden="true">✓</span><p>Your front desk stops drowning in reminder calls — <b>the system handles it</b> — and gets to actually care for the people in the room.</p></div>
      <div class="dream-item rv"><span class="tick" aria-hidden="true">✓</span><p>And you stop paying a big agency <b>thousands a month</b> for a PDF report you never read.</p></div>
    </div>

    <!-- 🖼️ DREAM IMAGE — a bright, busy-but-calm reception or a relaxed dentist mid-treatment. Sells the feeling, not the feature. -->
    <div class="imgslot r169 rv" style="margin-top:2.4rem;border-color:rgba(245,247,243,.18)">
      <span class="ph">🖼️ DREAM IMAGE<br>1200×675px<br>Full waiting room / calm front desk / relaxed dentist<br>(warm golden light — the "solved" feeling)</span>
    </div>
  </div>
</section>

<!-- ============ VS — anchoring against expensive agencies ============ -->
<section class="vs" id="vs">
  <div class="wrap">
    <span class="eyebrow rv">Stop overpaying for underwhelming</span>
    <h2 class="rv">You don't need a $5,000-a-month agency. You need results.</h2>

    <div class="vs-grid">
      <div class="vs-col them rv">
        <div class="head">The big dental agencies</div>
        <div class="price">$3,000–$5,000<span style="font-size:.9rem;font-family:var(--body);color:var(--ink-60)"> /mo</span></div>
        <ul>
          <li>Lock you into a 12-month contract</li>
          <li>Sell you the same template as 200 other practices</li>
          <li>Hand you to an account manager who reads from a script</li>
          <li>Take 8–16 weeks just to launch</li>
          <li>Send a monthly report instead of booked patients</li>
        </ul>
      </div>
      <div class="vs-col us rv">
        <span class="badge">SAME RESULTS · A FRACTION OF THE COST</span>
        <div class="head">Working with Deekod</div>
        <div class="price">From $500<span style="font-size:.9rem;font-family:var(--body);color:rgba(245,247,243,.6)"> /mo</span></div>
        <ul>
          <li>Plans start at less than the cost of one implant</li>
          <li>Month-to-month — we earn you every single month</li>
          <li>Custom-built for your practice, not a template</li>
          <li>You talk to the people actually doing the work</li>
          <li>Live in 14 days, not months</li>
        </ul>
      </div>
    </div>
    <p class="micro rv" style="text-align:center;margin-top:1.6rem">Tell us your budget on the call. We'll show you the best possible plan inside it — even if that plan is small to start.</p>

    @foreach($portfolios as $portfolio)
    <div class="ba-grid rv" aria-label="Before and after concept" style="margin-bottom: 2rem;">
      <div class="ba before">
        <div class="cap">Typical template site</div>
        <div class="imgslot light r169" style="border-radius:0;border:0;border-top:1px solid var(--line)">
          @if($portfolio->before_image)
              <img src="{{ Storage::url($portfolio->before_image) }}" alt="Before" loading="lazy">
          @else
              <span class="ph">🖼️ "BEFORE" SCREENSHOT<br>1200×675px<br>Outdated/slow dental site<br>(blur the practice name)</span>
          @endif
        </div>
      </div>
      <div class="ba after">
        <div class="cap">{{ $portfolio->title }}</div>
        <div class="imgslot r169" style="border-radius:0;border:0">
          @if($portfolio->after_image)
              <img src="{{ Storage::url($portfolio->after_image) }}" alt="After" loading="lazy">
          @else
              <span class="ph">🖼️ "AFTER" SCREENSHOT<br>1200×675px<br>One of your real dental builds</span>
          @endif
        </div>
      </div>
    </div>
    @endforeach
    @if($portfolios->isEmpty())
    <div class="ba-grid rv" aria-label="Before and after concept">
      <!-- 🖼️ BEFORE — real screenshot of an outdated/template dental site (blur or don't name the practice) -->
      <div class="ba before">
        <div class="cap">Typical template site</div>
        <div class="imgslot light r169" style="border-radius:0;border:0;border-top:1px solid var(--line)">
          <span class="ph">🖼️ "BEFORE" SCREENSHOT<br>1200×675px<br>Outdated/slow dental site<br>(blur the practice name)</span>
        </div>
      </div>
      <!-- 🖼️ AFTER — real screenshot of one of YOUR builds (Paramus Park, PreVu, Hesed) -->
      <div class="ba after">
        <div class="cap">Your Deekod build</div>
        <div class="imgslot r169" style="border-radius:0;border:0">
          <span class="ph">🖼️ "AFTER" SCREENSHOT<br>1200×675px<br>One of your real dental builds</span>
        </div>
      </div>
    </div>
    @endif
    </div>
  </div>
</section>

<!-- ============ GHL / automation ============ -->
<section class="auto" id="automation">
  <div class="wrap">
    <span class="eyebrow rv">The system behind it</span>
    <h2 class="rv">The Deekod Patient Engine. It never sleeps, never calls in sick, never misses a lead.</h2>
    <p class="sub rv">We install a front-desk engine that catches every patient the moment they reach out — and follows up until they're booked. This is how the leaks close.</p>

    <!-- 🖼️ PROOF SCREENSHOT — a real phone screenshot of the missed-call text-back conversation. This is your strongest single image: it PROVES the product exists. -->
    <div class="split rv" style="margin-top:2.4rem;align-items:center">
      <div class="sp-media">
        <div class="imgslot r34" style="max-width:300px;margin-inline:auto;border-color:rgba(245,247,243,.18)">
          <span class="ph">🖼️ PHONE SCREENSHOT<br>750×1000px<br>Real missed-call text-back<br>conversation thread</span>
        </div>
      </div>
      <div>
        <p style="font-size:1.12rem;color:rgba(245,247,243,.9)">This is what a patient sees <b style="color:var(--amber-soft)">42 seconds</b> after your phone rang out — while your front desk was still with someone else.</p>
        <p style="margin-top:1rem;color:rgba(245,247,243,.65);font-size:.96rem">No app for them to download. No form to fill. Just a text, a link, and a booked slot.</p>
      </div>
    </div>

    <div class="flow" style="margin-top:2.4rem">
      <div class="flow-step rv"><div class="n">STEP 01</div><b>Patient reaches out</b><span>Missed call, form, or DM — day or night.</span></div>
      <div class="flow-step rv"><div class="n">STEP 02</div><b>Instant response</b><span>Auto-text within seconds: "Sorry we missed you — want to book?"</span></div>
      <div class="flow-step rv"><div class="n">STEP 03</div><b>Booked automatically</b><span>They pick a slot from a live calendar. No phone tag.</span></div>
      <div class="flow-step rv"><div class="n">STEP 04</div><b>Reminded + reviewed</b><span>Reminders cut no-shows; a review request goes out after.</span></div>
    </div>
    <p class="auto-note rv"><b>The result:</b> you cut front-desk cost, stop losing leads, and turn your practice into a machine that books patients while you're mid-crown. We set it up once. It runs forever.</p>
    <p class="auto-note rv" style="margin-top:1.2rem;font-size:.98rem;color:rgba(245,247,243,.7)">The Patient Engine runs on <b style="color:var(--amber-soft)">GoHighLevel</b>, configured for <b style="color:var(--amber-soft)">HIPAA compliance</b> with a signed Business Associate Agreement — so patient data is handled properly, and you own your automations, your data, and your pipeline. No proprietary black box. If you ever leave, it's yours to keep.</p>
  </div>
</section>

<!-- ============ BANDWAGON — social proof / FOMO ============ -->
<section class="bw" id="proof">
  <div class="wrap">
    <span class="eyebrow rv">You're not the first — don't be the last</span>
    <h2 class="rv">The practice two miles away isn't a better dentist. They just stopped leaking patients first.</h2>
    <p class="sub rv">While you're deciding, they've got missed-call text-back running, a full recall calendar, and a front desk that isn't panicking. They're not "trying marketing" — they're running a system. Every month you wait, that gap widens.</p>

    <!-- ⚠️ Replace with real, verifiable activity/quotes before launch. Never publish invented client names. -->
    <div class="bw-feed">
      <div class="bw-row rv"><span class="dot" aria-hidden="true"></span><b>Dr. Smith's Dental in TX</b> booked 4 new implants this week<span class="when">2 hours ago</span></div>
      <div class="bw-row rv"><span class="dot" aria-hidden="true"></span><b>A pediatric clinic in FL</b> recovered 12 missed calls today<span class="when">5 hours ago</span></div>
      <div class="bw-row rv"><span class="dot" aria-hidden="true"></span><b>Precision Smiles Studio</b> reactivated 43 dormant patients<span class="when">yesterday</span></div>
    </div>

    <h3 style="font-family:var(--disp);font-size:1.5rem;font-weight:800;margin-top:3.2rem" class="rv">Hear it from the chair, not from us.</h3>
    <p class="sub rv" style="margin-top:.6rem">30 seconds each. Real practices, real results — in their own words.</p>

    <!-- ⚠️ VIDEO REVIEWS — drop your 3 real client videos here.
         Self-hosted:  <video controls playsinline poster="images/review1-thumb.jpg"><source src="videos/review1.mp4" type="video/mp4"></video>
         YouTube:      <iframe src="https://www.youtube.com/embed/VIDEO_ID" title="Client review" allowfullscreen loading="lazy"></iframe>
         Replace the .play + .ph spans inside each .vframe. Keep 9:16 vertical for UGC-style clips. -->
    <div class="vids">
      <article class="vcard rv">
        <div class="vframe">
          <div class="play" aria-hidden="true">▶</div>
          <span class="ph">VIDEO REVIEW 1<br>9:16 vertical · ~30 sec</span>
        </div>
        <div class="vmeta">
          <b>[Dr. Name]</b>
          <span>[Practice] · [City, State]</span>

        </div>
      </article>

      <article class="vcard rv">
        <div class="vframe">
          <div class="play" aria-hidden="true">▶</div>
          <span class="ph">VIDEO REVIEW 2<br>9:16 vertical · ~30 sec</span>
        </div>
        <div class="vmeta">
          <b>[Dr. Name]</b>
          <span>[Practice] · [City, State]</span>
          <span class="angle">Speed &amp; founder-direct</span>
        </div>
      </article>

      <article class="vcard rv">
        <div class="vframe">
          <div class="play" aria-hidden="true">▶</div>
          <span class="ph">VIDEO REVIEW 3<br>9:16 vertical · ~30 sec</span>
        </div>
        <div class="vmeta">
          <b>[Dr. Name]</b>
          <span>[Practice] · [City, State]</span>
          <span class="angle">Automation &amp; reactivation</span>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ============ CALM — objection handling / reassurance ============ -->
<section class="calm" id="reassure">
  <div class="wrap">
    <span class="eyebrow rv">Before you talk yourself out of it</span>
    <h2 class="rv">It's a 15-minute call. Here's what it isn't.</h2>

    <div class="calm-grid">
      <div class="calm-card rv">
        <div class="q">"I don't have the budget."</div>
        <p>Then tell us that on the call. We build a plan around what you can spend — even if it's small to start — and grow it only when it's making you money. No budget is too small to stop the leaks.</p>
      </div>
      <div class="calm-card rv">
        <div class="q">"I'll just get a hard sell."</div>
        <p>No pitch, no pressure, no slides. We pull up your site and your Google profile, show you what we see, and you decide. If it's not a fit, we'll say so.</p>
      </div>
      <div class="calm-card rv">
        <div class="q">"Booking feels like a commitment."</div>
        <p>It commits you to 15 minutes and nothing else. You'll walk away knowing exactly where you're losing patients — whether you work with us or not. That's yours to keep.</p>
      </div>
      <div class="calm-card rv">
        <div class="q">"Will you actually listen to me?"</div>
        <p>That's the whole call. We ask about your practice, your goals, your budget — then show you the best possible path inside it. You talk to a real person who's built this for dentists before.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ FOUNDER VOICE — liking / warmth ============ -->
<section class="fv">
  <div class="wrap">
    <!-- ⚠️ Make this TRUE. Swap in your own real reason for starting Deekod — an honest sentence beats a polished one. -->
    <div class="fv-card rv">
      <!-- 🖼️ FOUNDER PHOTO — highest-ROI image on the page. Replace with: <img src="images/ehtisham.jpg" alt="Ehtisham, founder of Deekod Digital" style="width:70px;height:70px;border-radius:50%;object-fit:cover;flex:none"> -->
      <div class="imgslot r11" style="flex:none;width:70px;height:70px;border-radius:50%;padding:.4rem">
        <span class="ph" style="font-size:.5rem;letter-spacing:.06em;line-height:1.4">🖼️ YOUR<br>PHOTO</span>
      </div>
      <div class="body">
        <p>"I still personally review every single site we ship — I'm genuinely obsessive about how fast a page loads, because I've watched practices lose real patients to a three-second delay they never even knew about. I didn't start Deekod to be 'an agency.' I started it because good dentists kept overpaying big firms for slow, templated work — and I knew we could just... do it better, faster, and actually talk to them like humans."</p>
        <p class="sig"><b>— Ehtisham</b> · Founder, Deekod Digital</p>
      </div>
    </div>
    <!-- ⚠️ Record a real 60-sec Loom and embed it here — replace this placeholder block with your <iframe>. Video makes the "liking" and "real human" claims far stronger than text. -->
    <div class="fv-video rv" role="img" aria-label="Founder video placeholder">
      <div class="play" aria-hidden="true">▶</div>
      <span class="lbl">[ Embed your 60-second founder video here — "Send me your URL, I'll show you what's leaking." ]</span>
    </div>
  </div>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="final" id="book">
  <div class="wrap narrow">
    <div class="presence rv"><i aria-hidden="true"></i>Real humans are online — not a bot, not a dead form</div>
    <h2 class="rv">You went to dental school to fix teeth — not chase ad metrics.</h2>
    <p class="sub rv">So let us handle the marketing and get you back to the chair. One 15-minute call. We show you exactly where patients are leaking — and the fastest path inside your budget to bring them back.</p>

    <div class="hero-cta rv">
      <!-- REPLACE href with your Calendly link -->
      <a class="btn pulse" href="{{ $siteSetting?->calendly_link ?? 'https://calendly.com/YOUR-LINK' }}" target="_blank" rel="noopener">Book my free 15-minute call →</a>
      <span class="micro" style="color: #fff;">No budget? Say so on the call — we'll show you the #1 free fix first, even if you never hire us.</span>
    </div>

    <div class="steps3 rv" aria-label="What happens after you book">
      <div><b>1.</b> Pick a 15-min slot</div>
      <div><b>2.</b> We audit your site live</div>
      <div><b>3.</b> You keep the plan — free</div>
    </div>

    <p class="orpath rv" style="margin-top:1.8rem">Rather not book yet? <a href="#" class="open-lead-modal">Send your website URL</a> — Ehtisham will reply with a 3-minute video of exactly what's leaking. Today. No call required.</p>

    <div class="reply-note rv"><i aria-hidden="true"></i>A real person is watching this inbox right now — not a bot, not a 48-hour ticket queue.</div>

    <!-- Honest guarantee — safe to publish because it's a value promise, not a performance claim -->
    <div class="guarantee rv">
      <span class="seal" aria-hidden="true">✓</span>
      <p><b>Our promise:</b> if we can't show you at least one real leak costing you patients in those 15 minutes, we'll tell you straight — and you've lost nothing but a coffee break.</p>
    </div>

    <!-- ⚠️ ONLY keep this line if it's TRUE. Fake scarcity is detectable and destroys trust. -->
    <p class="scarcity rv"><i aria-hidden="true"></i>WE ONBOARD ONLY 5 NEW PRACTICES A MONTH — SO EHTISHAM REVIEWS EVERY SITE PERSONALLY.</p>
  </div>
</section>

@endsection

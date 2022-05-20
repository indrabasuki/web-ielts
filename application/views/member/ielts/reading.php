<div class="container">
    <div class="row ">
        <div class="col-md-12 mt-4">
            <div class="card card-primary card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="pt-2 px-3">
                            <h3 class="card-title">READING</h3>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="tabs-passage1" data-toggle="pill" href="#tabs-passage-1" role="tab" aria-controls="tabs-passage-1" aria-selected="true">PASSAGE 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tabs-passage2" data-toggle="pill" href="#tabs-passage-2" role="tab" aria-controls="tabs-passage-2" aria-selected="false">PASSAGE 2</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tabs-part3" data-toggle="pill" href="#tabs-passage-3" role="tab" aria-controls="tabs-passage-3" aria-selected="false">PASSAGE 3</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <?= form_open('reading/store') ?>
                    <input type="hidden" name="id" value="<?= $id ?>">

                    <div class="tab-content" id="custom-tabs-two-tabContent">
                        <!-- part1 -->
                        <div class="tab-pane fade show active" id="tabs-passage-1" role="tabpanel" aria-labelledby="tabs-passage1">
                            <div class="card-body">
                                <p>
                                    <strong>READING PASSAGE 1</strong>
                                </p>
                                <p>You should spend about 20 minutes on Questions 1-13, which are based on Reading Passage 1 below. </p>

                                <table class="table table-bordered">
                                    <tr>
                                        <th class="text-center">William Henry Perkin <br>
                                            The man who invented synthetic dyes
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p>
                                                William Henry Perkin was born on March 12,1838, in London, England. As a boy, Perkin’s curiosity prompted early interests in the arts, sciences, photography, and engineering. But it was a chance stumbling upon a run-down, yet functional, laboratory in his late grandfather’s home that solidified the young man’s enthusiasm for chemistry.
                                            </p>
                                            <p>
                                                As a student at the City of London School, Perkin became immersed in the study of chemistry. His talent and devotion to the subject were perceived by his teacher, Thomas Hall, who encouraged him to attend a series of lectures given by the eminent scientist Michael Faraday at the Royal Institution. Those speeches fired the young chemist’s enthusiasm further, and he later went on to attend the Royal College of Chemistry, which he succeeded in entering in 1853, at the age of 15.
                                            </p>
                                            <p>
                                                At the time of Perkin’s enrolment, the Royal College of Chemistry was headed by the noted German chemist August Wilhelm Hofmann. Perkin’s scientific gifts soon caught Hofmann’s attention and, within two years, he became Hofmann’s youngest assistant. Not long after that, Perkin made the scientific breakthrough that would bring him both fame and fortune.

                                            </p>
                                            <p>
                                                At the time, quinine was the only viable medical treatment for malaria. The drug is derived from the bark of the cinchona tree, native to South America, and by 1856 demand for the drug was surpassing the available supply. Thus, when Hofmann made some passing comments about the desirability of a synthetic substitute for quinine, it was unsurprising that his star pupil was moved to take up the challenge.
                                            </p>
                                            <p>
                                                During his vacation in 1856, Perkin spent his time in the laboratory on the top floor of his family’s house. He was attempting to manufacture quinine from aniline, an inexpensive and readily available coal tar waste product. Despite his best efforts, however, he did not end up with quinine. Instead, he produced a mysterious dark sludge. Luckily, Perkin’s scientific training and nature prompted him to investigate the substance further. Incorporating potassium dichromate and alcohol into the aniline at various stages of the experimental process, he finally produced a deep purple solution. And, proving the truth of the famous scientist Louis Pasteur’s words ‘chance favours only the prepared mind’, Perkin saw the potential of his unexpected find.
                                            </p>
                                            <p>
                                                Historically, textile dyes were made from such natural sources as plants and animal excretions. Some of these, such as the glandular mucus of snails, were difficult to obtain and outrageously expensive. Indeed, the purple colour extracted from a snail was once so costly that in society at the time only the rich could afford it. Further, natural dyes tended to be muddy in hue and fade quickly. It was against this backdrop that Perkin’s discovery was made.
                                            </p>
                                            <p>
                                                Perkin quickly grasped that his purple solution could be used to colour fabric, thus making it the world’s first synthetic dye. Realising the importance of this breakthrough, he lost no time in patenting it. But perhaps the most fascinating of all Perkin’s reactions to his find was his nearly instant recognition that the new dye had commercial possibilities.
                                            </p>
                                            <p>
                                                Perkin originally named his dye Tyrian Purple, but it later became commonly known as mauve (from the French for the plant used to make the colour violet). He asked advice of Scottish dye works owner Robert Pullar, who assured him that manufacturing the dye would be well worth it if the colour remained fast (i.e. would not fade) and the cost was relatively low. So, over the fierce objections of his mentor Hofmann, he left college to give birth to the modern chemical industry.
                                            </p>
                                            <p>
                                                With the help of his father and brother, Perkin set up a factory not far from London. Utilising the cheap and plentiful coal tar that was an almost unlimited by product of London’s gas street lighting, the dye works began producing the world’s first synthetically dyed material in 1857. The company received a commercial boost from the Empress Eugenie of France, when she decided the new colour flattered her. Very soon, mauve was the necessary shade for all the fashionable ladies in that country.
                                            </p>
                                            <p>
                                                Not to be outdone, England’s Queen Victoria also appeared in public wearing a mauve gown, thus making it all the rage in England as well. The dye was bold and fast, and the public clamoured for more. Perkin went back to the drawing board.
                                            </p>
                                            <p>
                                                Although Perkin’s fame was achieved and fortune assured by his first discovery, the chemist continued his research. Among other dyes he developed and introduced were aniline red (1859) and aniline black (1863) and, in the late 1860s, Perkin’s green. It is important to note that Perkin’s synthetic dye discoveries had outcomes far beyond the merely decorative. The dyes also became vital to medical research in many ways. For instance, they were used to stain previously invisible microbes and bacteria, allowing researchers to identify such bacilli as tuberculosis, cholera, and anthrax. Artificial dyes continue to play a crucial role today. And, in what would have been particularly pleasing to Perkin, their current use is in the search for a vaccine against malaria.
                                            </p>
                                            <hr>
                                            <p><strong>Question 1-7</strong></p>
                                            <p>
                                                Do the following statements agree with the information given in Reading Passage 1?<br>
                                                In boxes 1-7 on your answer sheet, write:
                                            </p>
                                            <p> <b>TRUE</b> if the statement agrees with the information
                                                <br>
                                                <b>FALSE</b> if the statement contradicts the information
                                                <br>
                                                <b>NOT GIVEN </b>if there is no information on this more than once.
                                            </p>
                                            <ol>
                                                <p><b>1.</b>
                                                    Michael Faraday was the first person to recognize Perkin’s ability as a student of chemistry
                                                    <input type="text" name="parmas_1" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>2.</b>
                                                    Michael Faraday suggested Perkin should enroll in the Royal College of Chemistry.
                                                    <input type="text" name="parmas_2" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>3.</b>
                                                    Perkin employed August Wilhelm Hofmann as his assistant.
                                                    <input type="text" name="parmas_3" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>4.</b>
                                                    Perkin was still young when he made the discovery that made him rich and famous.
                                                    <input type="text" name="parmas_4" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>5.</b>
                                                    The trees from which quinine is derived grow only in South America.
                                                    <input type="text" name="parmas_5" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>6.</b>
                                                    Perkin hoped to manufacture a drug from a coal tar waste product.
                                                    <input type="text" name="parmas_6" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>7.</b>
                                                    Perkin was inspired by the discoveries of the famous scientist Louis Pasteur
                                                    <input type="text" name="parmas_7" placeholder="Your answer" size="25">

                                                </p>
                                            </ol>
                                            <p><strong>Question 8-13</strong></p>
                                            <p>Answer the Questions below:</p>
                                            <p>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer</p>
                                            <p>Write your answers in boxes 8-13 on your answer sheet.</p>
                                            <ol>
                                                <p><b>8.</b>
                                                    Before Perkin’s discovery, with what group in society was the colour purple associated?
                                                    <input type="text" name="parmas_8" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>9.</b>
                                                    What potential did Perkin immediately understand that his new dye had?
                                                    <input type="text" name="parmas_9" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>10.</b>
                                                    What was the name finally used to refer to the first color Perkin invented?
                                                    <input type="text" name="parmas_10" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>11.</b>
                                                    What was the name of the person Perkin consulted before setting up his own dye works?
                                                    <input type="text" name="parmas_11" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>12.</b>
                                                    In what country did Perkins newly invented colour first become fashionable?
                                                    <input type="text" name="parmas_12" placeholder="Your answer" size="25">
                                                </p>
                                                <p><b>13.</b>
                                                    According to the passage, which disease is now being targeted by researchers using synthetic dyes?
                                                    <input type="text" name="parmas_13" placeholder="Your answer" size="25">
                                                </p>
                                            </ol>
                                        </td>

                                    </tr>
                                </table>
                                <div class="text-center">
                                    <a id="tabs-passage2" data-toggle="pill" href="#tabs-passage-2" role="tab" aria-controls="tabs-passage-2" aria-selected="false" class=" btn btn-primary mt-1">Next <i class="fas fa-arrow-right"></i></a>

                                </div>
                            </div>
                        </div>

                        <!-- end part1 -->

                        <!-- part2 -->
                        <div class="tab-pane fade" id="tabs-passage-2" role="tabpanel" aria-labelledby="tabs-passage2">
                            <div class="card-body">
                                <p>
                                    <strong>Question 14 – 20
                                    </strong>
                                </p>
                                <p>Reading Passage 2 has seven sections,<b> A-G.</b></p>
                                <p>Choose the correct heading for each section from the fist of headings below </p>
                                <p>Write the correct number, i-x, in boxes 14-20 on your answer sheet. </p>
                                <hr>
                                <ol>
                                    <p>
                                        <b>14.</b>Section A <input type="text" name="params_14" placeholder="Your answer">
                                    </p>
                                    <p>
                                        <b>15.</b>Section B <input type="text" name="params_15" placeholder="Your answer">
                                    </p>
                                    <p>
                                        <b>16.</b>Section C <input type="text" name="params_16" placeholder="Your answer">
                                    </p>
                                    <p>
                                        <b>17.</b>Section D <input type="text" name="params_17" placeholder="Your answer">
                                    </p>
                                    <p>
                                        <b>18.</b>Section E <input type="text" name="params_18" placeholder="Your answer">
                                    </p>
                                    <p>
                                        <b>19.</b>Section F <input type="text" name="params_19" placeholder="Your answer">
                                    </p>
                                    <p>
                                        <b>20.</b>Section F <input type="text" name="params_20" placeholder="Your answer">
                                    </p>
                                </ol>
                                <p class="text-center"><b><u>The Desolenator: producing clean water</u></b></p>
                                <ol type="A">
                                    <li>
                                        Travelling around Thailand in the 1990s, William Janssen was impressed with the basic rooftop solar heating systems that were on many homes, where energy from the sun was absorbed by a plate and then used to heat water for domestic use. Two decades later Janssen developed that basic idea he saw in Southeast Asia into a portable device that uses the power from the sun to purify water.
                                    </li>
                                    <li>
                                        The Desolenator operates as a mobile desalination unit that can take water from different places, such as the sea, rivers, boreholes and rain, and purify it for human consumption. It is particularly valuable in regions where natural groundwater reserves have been polluted, or where seawater is the only water source available. <br>
                                        Janssen saw that there was a need for a sustainable way to clean water in both the developing and the developed countries when he moved to the United Arab Emirates and saw large-scale water processing. ‘I was confronted with the enormous carbon footprint that the Gulf nations have because of all of the desalination that they do,’ he says.
                                    </li>
                                    <li>
                                        The Desolenator can produce 15 litres of drinking water per day, enough to sustain a family for cooking and drinking. Its main selling point is that unlike standard desalination techniques, it doesn’t require a generated power supply: just sunlight. It measures 120cm by 90cm, and it easy to transport, thanks to its two wheels. Water enters through a pipe, and flows as a thin film between a sheet of double glazing and the surface of a solar panel, where it is heated by the sun. The warm water flows into a small boiler (heated by a solar-powered battery) where it is converted to steam. When the steam cools, it becomes distilled water. The device has a very simple filter to trap particles, and this can easily be shaken to remove them. There are two tubes for liquid coming out: one for the waste – salt from seawater, fluoride, etc. – and another for the distilled water. The performance of the unit is shown on an LCD screen and transmitted to the company which provides servicing when necessary.
                                    </li>
                                    <li>
                                        A recent analysis found that at least two-thirds of the world’s population lives with severe water scarcity for at least a month every year. Janssen says that by 2030 half of the world’s population will be living with water stress – where the demand exceeds the supply over a certain period of time. ‘It is really important that a sustainable solution is brought to the market that is able to help these people,’ he says. Many countries ‘don’t have the money for desalination plants, which are very expensive to build. They don’t have the money to operate them, they are very maintenance intensive, and they don’t have the money to buy the diesel to run the desalination plants, so it is a really bad situation.’
                                    </li>
                                    <li>
                                        The device is aimed at a wide variety of users – from homeowners in the developing world who do not have a constant supply of water to people living off the grid in rural parts of the US. The first commercial versions of the Desolenator are expected to be in operation in India early next year, after field tests are carried out. The market for the self-sufficient devices in developing countries is twofold – those who cannot afford the money for the device outright and pay through microfinance, and middle-income homes that can lease their own equipment. ‘People in India don’t pay for a fridge outright; they pay for it over six months. They would put the Desolenator on their roof and hook it up to their municipal supply and they would get very reliable drinking water on a daily basis,’ Janssen says. In the developed world, it is aimed at niche markets where tap water is unavailable – for camping, on boats, or for the military, for instance.
                                    </li>
                                    <li>
                                        Prices will vary according to where it is bought. In the developing world, the price will depend on what deal aid organisations can negotiate. In developed countries, it is likely to come in at $1,000 (£685) a unit, said Janssen. ‘We are a venture with a social mission. We are aware that the product we have envisioned is mainly finding application in the developing world and humanitarian sector and that this is the way we will proceed. We do realise, though, that to be a viable company there is a bottom line to keep in mind,’ he says.
                                    </li>
                                    <li>
                                        The company itself is based at Imperial College London, although Janssen, its chief executive, still lives in the UAE. It has raised £340,000 in funding so far. Within two years, he says, the company aims to be selling 1,000 units a month, mainly in the humanitarian field. They are expected to be sold in areas such as Australia, northern Chile, Peru, Texas and California.
                                    </li>
                                </ol>
                                <p><b>Questions 21-26 </b></p>
                                <p>Complete the summary below. </p>
                                <p>Choose <b>ONE WORD ONLY</b> from the passage for each answer. </p>
                                <p>Write your answers in boxes 21-26 on your answer sheet.</p>
                                <br>
                                <p class="text-center">How the Desolenator works</p>
                                <p>The energy required to operate the Desolenator comes from sunlight. The device can be used in different locations, as it has <b>21.</b><input type="text" name="params_21" id="" placeholder="Your answer"> .Water is fed into a pipe, and a <b>22.</b><input type="text" name="params_22" id="" placeholder="Your answer"> of water flows over a solar panel. The water then enters a boiler, where it turns into steam. Any particles in the water are caught in a <b>23.</b><input type="text" name="params_23" id="" placeholder="Your answer"> The purified water comes out through one tube, and all types of <b>24.</b><input type="text" name="params_24" id="" placeholder="Your answer"> come out through another. A screen displays the <b>25.</b><input type="text" name="params_25" id="" placeholder="Your answer"> of the device, and transmits the information to the company so that they know when the Desolenator requires <b>26.</b><input type="text" name="params_26" id="" placeholder="Your answer"></p>


                            </div>
                        </div>
                        <!--end  part2 -->

                        <!-- part3 -->
                        <div class="tab-pane fade" id="tabs-passage-3" role="tabpanel" aria-labelledby="tabs-passage-3">
                            <div class="card">
                                <div class="card-body">
                                    <p>
                                        <strong>You should spend about 20 minutes on Questions 27-40 which are based on Reading Passage 3 below.
                                        </strong>
                                    </p>

                                    <hr>
                                    <p class="text-center"><strong><u>Collecting Ant Specimens</u></strong></p>
                                    <p>
                                        Collecting ants can be as simple as picking up stray ones and placing them in a glass jar, or as complicated as completing an exhaustive survey of all species present in an area and estimating their relative abundances. The exact method used will depend on the final purpose of the collections. For taxonomy, or classification, long series, from a single nest, which contain all castes (workers, including majors and minors, and, if present, queens and males) are desirable, to allow the determination of variation within species. For ecological studies, the most important factor is collecting identifiable samples of as many of the different species present as possible. Unfortunately, these methods are not always compatible. The taxonomist sometimes overlooks whole species in favour of those groups currently under study, while the ecologist often collects only a limited number of specimens of each species, thus reducing their value for taxonomic investigations.
                                    </p>
                                    <p>
                                        To collect as wide a range of species as possible, several methods must be used. These include hand collecting, using baits to attract the ants, ground litter sampling, and the use of pitfall traps. Hand collecting consists of searching for ants everywhere they are likely to occur. This includes on the ground, under rocks, logs or other objects on the ground, in rotten wood on the ground or on trees, in vegetation, on tree trunks and under bark. When possible, collections should be made from nests or foraging columns and at least 20 to 25 individuals collected. This will ensure that all individuals are of the same species, and so increase their value for detailed studies. Since some species are largely nocturnal, collecting should not be confined to daytime. Specimens are collected using an aspirator (often called a pooter), forceps, a fine, moistened paint brush, or fingers, if the ants are known not to sting. Individual insects are placed in plastic or glass tubes (1.5-3-0 ml capacity for small ants, 5-8 ml for larger ants) containing 75% to 95% ethanol. Plastic tubes with secure tops are better than glass because they are lighter, and do not break as easily if mishandled.
                                    </p>
                                    <p>
                                        Baits can be used to attract and concentrate foragers. This often increases the number of individuals collected and attracts species that are otherwise elusive. Sugars and meats or oils will attract different species and a range should be utilised. These baits can be placed either on the ground or on the trunks of trees or large shrubs. When placed on the ground, baits should be situated on small paper cards or other flat, light-coloured surfaces, or in test-tubes or vials. This makes it easier to spot ants and to capture them before they can escape into the surrounding leaf litter.
                                    </p>
                                    <p>
                                        Many ants are small and forage primarily in the layer of leaves and other debris on the ground. Collecting these species by hand can be difficult. One of the most successful ways to collect them is to gather the leaf litter in which they are foraging and extract the ants from it. This is most commonly done by placing leaf litter on a screen over a large funnel, often under some heat. As the leaf litter dries from above, ants (and other animals) move downward and eventually fall out the bottom and are collected in alcohol placed below the funnel. This method works especially well in rain forests and marshy areas. A method of improving the catch when using a funnel is to sift the leaf litter through a coarse screen before placing it above the funnel. This will concentrate the litter and remove larger leaves and twigs. It will also allow more litter to be sampled when using a limited number of funnels.
                                    </p>
                                    <p>
                                        The pitfall trap is another commonly used tool for collecting ants. A pitfall trap can be any small container placed in the ground with the top level with the surrounding surface and filled with a preservative. Ants are collected when they fall into the trap while foraging. The diameter of the traps can vary from about 18 mm to 10 cm and the number used can vary from a few to several hundred. The size of the traps used is influenced largely by personal preference (although larger sizes are generally better), while the number will be determined by the study being undertaken. The preservative used is usually ethylene glycol or propylene glycol, as alcohol will evaporate quickly and the traps will dry out. One advantage of pitfall traps is that they can be used to collect over a period of time with minimal maintenance and intervention. One disadvantage is that some species are not collected as they either avoid the traps or do not commonly encounter them while foraging.
                                    </p>
                                    <br>
                                    <p><b>Question 27-30</b></p>
                                    <p>Do the following statements agree with the information given in Reading Passage 1?</p>
                                    <p>In boxes 27-30 on your answer sheet, write:</p>
                                    <p>
                                        <b>TRUE</b> if the statement agrees with the information <br>
                                        <b>FALSE</b> if the statement contradicts the information <br>
                                        <b>NOT GIVEN</b> if there is no information on this more than once.
                                    </p>
                                    <ol>
                                        <p><b>27.</b>
                                            Taxonomic research involves comparing members of one group of ants.
                                            <input type="text" name="params_27" placeholder="Your answer">
                                        </p>
                                        <p><b>28.</b>
                                            New species of ant are frequently identified by taxonomists.
                                            <input type="text" name="params_28" placeholder="Your answer">
                                        </p>
                                        <p><b>29.</b>
                                            Range is the key criterion for ecological collections. <input type="text" name="params_29" placeholder="Your answer">
                                        </p>
                                        <p><b>30.</b>
                                            A single collection of ants can generally be used for both taxonomic and ecological purposes. <input type="text" name="params_30" placeholder="Your answer">
                                        </p>
                                    </ol>
                                    <p><b>Question 31-36</b></p>
                                    <p>Classify the following statements as referring to</p>
                                    <ol type="A">
                                        <li>hand collecting</li>
                                        <li>using bait</li>
                                        <li>sampling ground litter</li>
                                        <li>using a pitfall trap</li>
                                    </ol>
                                    <p>Write the correct letter, A, B, C or D, in boxes 31-36 on your answer sheet.</p>
                                    <ol>
                                        <p><b>31.</b>
                                            It is preferable to take specimens from groups of ants.
                                            <input type="text" name="params_31" placeholder="Your answer">
                                        </p>

                                        <p><b>32.</b>
                                            It is particularly effective for wet habitats.
                                            <input type="text" name="params_32" placeholder="Your answer">
                                        </p>

                                        <p><b>33.</b>
                                            It is a good method for species which are hard to find. <input type="text" name="params_33" placeholder="Your answer">
                                        </p>

                                        <p><b>34.</b>
                                            34. Little time and effort is required. <input type="text" name="params_34" placeholder="Your answer">
                                        </p>

                                        <p><b>35.</b>
                                            Separate containers are used for individual specimens. <input type="text" name="params_35" placeholder="Your answer">
                                        </p>

                                        <p><b>36.</b>
                                            Non-alcoholic preservative should be used. <input type="text" name="params_36" placeholder="Your answer">
                                        </p>
                                    </ol>
                                    <p><b>Question 37-40</b></p>
                                    <p>Label the diagram below. </p>
                                    <p>Choose <b>NO MORE THAN TWO WORDS</b> from the passage for each answer.</p>
                                    <p>Write your answers in boxes 37-40 on your answer sheet.</p>

                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <img src="<?= base_url('public/img/xjuubrkkatxvfwreykts.png') ?>" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        <ol>
                                            <p>
                                                <b>37.</b>
                                                <input type="text" name="params_37" placeholder="Your answer">
                                            </p>
                                            <p>
                                                <b>38.</b>
                                                <input type="text" name="params_38" placeholder="Your answer">
                                            </p>
                                            <p>
                                                <b>39.</b>
                                                <input type="text" name="params_39" placeholder="Your answer">
                                            </p>
                                            <p>
                                                <b>40.</b>
                                                <input type="text" name="params_40" placeholder="Your answer">
                                            </p>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <button onclick="javascript:return confirm('Are you sure ?')" class="btn btn-primary" id="submit" type="submit">Submit <i class="fas fa-check"></i></button>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(":input").keyup(function() {
            $(this).val($(this).val().toUpperCase());

        });
    });
</script>
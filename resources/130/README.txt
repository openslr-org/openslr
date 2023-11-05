--------------------------------------------------------------------------------
                  Samrómur L2 22.09
--------------------------------------------------------------------------------

Language        : Icelandic

Authors         : Staffan Hedström, Judy Y. Fong, Ragnheiður Þórhallsdóttir,
                  David Erik Mollberg, Thomas Mestrou, Smári Freyr Guðmundsson,
                  Ólafur Helgi Jónsson, Sunneva Þorsteinsdóttir, Eydís Huld
                  Magnúsdóttir, Caitlin Laura Richter, Ragnar Pálsson,
                  Jon Gudnason

Recommended use : speech recognition, speaker verification, speaker
                  identification and speaker enrollment

--------------------------------------------------------------------------------
Description
--------------------------------------------------------------------------------

This release of data from the Samrómur collection focuses on speakers where
Icelandic is not their native language. The corpus contains 143,031
(151.8 hours) of mostly un-verified speech recordings in Icelandic.

The corpus is a result of the crowd-sourcing effort run by the Language and
Voice Lab (LVL) at Reykjavik University, in cooperation with Almannarómur, the
Icelandic Center for Language Technology. The recording process has started in
October 2019 and ended September 2022.

The present edition of the corpus has been authorized for release in September
2022. The aim is to create an open-source speech corpus to enable research and
development for Icelandic Language Technology. The corpus consists of audio
recordings and a metadata file containing the prompts read by the participants.

To see more open resources developed by the Language and Voice Lab (LVL) see the
GitHub repository at https://github.com/cadia-lvl/samromur-asr

--------------------------------------------------------------------------------
Corpus Characteristics
--------------------------------------------------------------------------------

- Only a small part of the corpus is validated. The corpus contains 4,957
  validated utterances and the rest (138,074) of the utterances are not
  validated.

- The utterances were recorded by a smartphone or the web app.

- Participants self-reported their age group, gender and native language.

- Participants are from 6 to 80+ years.

- The corpus contains 143,031 utterances from 2,189 speakers,
  totalling 151.8 hours.

- The amount of data from female speakers is 101h28m and the amount of data from
  male speakers are 46h4m and the amount of data from speakers with an
  unknown gender information is 4h16m.

- The number of female speakers is 761, and the number of male speakers is 473.
  The number of speakers with unknown gender information is 955.

- The number of utterances from female speakers is 97,075; the utterances
  from male speakers are 42,762; and the utterances from speakers with
  unknown gender information is 3,194.

- The corpus is split into train, dev, and test sets. Lengths of the sets are:
  train = 91.4h, test = 29.3h, dev = 31.1h. For more such subsets please use
  Samrómur 21.05, Samrómur Queries 21.12 or Samrómur Children 21.09.

- If any of the information in the metadata is unavailable this will be
  indicated with a NAN in the metadata file.

--------------------------------------------------------------------------------
Collection Procedure
--------------------------------------------------------------------------------

The data was collected using the website https://samromur.is, the code of which
is available at https://github.com/cadia-lvl/samromur. The collection procedure
is well described in "Samrómur: Crowd-sourcing Data Collection for Icelandic
Speech Recognition" [1] and "Samrómur: Crowd-sourcing large amount of data” [3].

The original audio was collected at 44.1 kHz or 48 kHz sampling rate as _.wav
files, which was down-sampled to 16 kHz and converted to _.flac. Each recording
contains one read prompt from a script. The script contains 89,083 unique
prompts, 956,989 tokens and 48,875 word types.

Each time a device visits the website for the first time they are assigned a
client id, this client id together with a combination of gender, age and native
language was used to assign the speaker id. If any of these variables were
changed, a new speaker id was also created. The corpus is distributed with a
metadata file with detailed information on each utterance and speaker. The
metadata file is encoded as UTF-8 Unicode.

The prompts were gathered from a variety of sources, mainly from The Icelandic
Gigaword Corpus, which is available at http://clarin.is/en/resources/gigaword.
The corpus includes prompts found in novels, news, and plays. The prompts
also came from the Icelandic Web of Science (https://www.visindavefur.is/).
Some prompts were donated from Icelandic course material.

Prompts were pulled from these sources if they met the criteria of having only
letters which are present in the Icelandic alphabet, and if they are listed
in DIM: Database Icelandic Morphology [2]. Finally, there are also
synthesized prompts consisting of a name followed by a question,
in order to simulate dialogue with a smart device.
--------------------------------------------------------------------------------
Data Format Specifics
--------------------------------------------------------------------------------

- Text : The corpus does not contain separate transcription or prompt files.
         The metadata file contains the prompts in their original text form,
         as the participants saw them, and also in their normalised form.

- Audio: The distributed audio files are encoded at 16 kHz sampling rate, 16 bit
         linear PCM, 1 channel, \*.flac format. The corpus is split into train,
	 dev and test subsets. Each subset contains folders that correspond to
         speaker IDs and the audio files inside use the following naming
         convention: {speaker_ID}-{utterance_ID}.flac.

--------------------------------------------------------------------------------
Citation
--------------------------------------------------------------------------------

When publishing results based on the corpus please refer to:

   Hedström et al. "Samrómur L2 22.09". Web Download. Reykjavik
   University: Language and Voice Lab, 2022.

Contact: Jon Gudnason (jg@ru.is)

License: CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/legalcode)

--------------------------------------------------------------------------------
Acknowledgements
--------------------------------------------------------------------------------

This project was funded by the Language Technology Programme for Icelandic
2019-2022. The programme, which is managed and coordinated by Almannarómur,
is funded by the Icelandic Ministry of Education, Science and Culture.

Special thanks to the assisting LVL members and summer students for all the hard
work.

--------------------------------------------------------------------------------
Stats for the dataset
--------------------------------------------------------------------------------


Age and gender split:
|                  | Total | Test  | Dev   | Train |
| ---------------- | ----- | ----- | ----- | ----- |
| 0-19:            | 58.4% | 46.6% | 57.7% | 63.2% |
| 20-39:           | 14.5% | 21.9% | 10.9% | 13.1% |
| 40-59:           | 24.4% | 31.3% | 29.2% | 20.2% |
| 60-79:           | 1.1%  | 0.0%  | 0.9%  | 1.5%  |
| 80+:             | 0.6%  | 1.2%  | 1.2%  | 0.3%  |
| ---------------- | ----- | ----- | ----- | ----- |
| Female:          | 67.9% | 66.3% | 65.8% | 69.3% |
| Male:            | 29.9% | 32.9% | 32.0% | 28.0% |
| Other:           | 2.2%  | 0.8%  | 2.1%  | 2.8%  |
| ---------------- | ----- | ----- | ----- | ----- |
| Duration (h):    | 151.8 | 29.3  | 31.1  | 91.4  |
| Unique speakers: | 2189  | 203   | 220   | 1906  |


Amount of utterances in each subset:
train: 83,404
dev: 29,748
test: 29,758

Total speakers and utterances:
Speakers: 2,189
Utterances: 143,031

Average utterance length: 3.82s

--------------------------------------------------------------------------------
References
--------------------------------------------------------------------------------

[1] Mollberg et al. "Samrómur: Crowd-sourcing Data Collection for Icelandic
    Speech Recognition," 12th International Conference on Language Resources and
    Evaluation (LREC), France, 2020.

[2] Bjarnadóttir et al. "DIM: The Database of Icelandic Morphology".
    Proceedings of the 22nd Nordic Conference on Computational Linguistics
    (NoDaLiDa), Finland. 2019.

[3] Hedström et al. "Samrómur: Crowd-sourcing large amount of data”,
    13th International Conference on Language Resources and Evaluation (LREC),
    France, 2022.

--------------------------------------------------------------------------------




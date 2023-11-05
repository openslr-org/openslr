--------------------------------------------------------------------------------
                  Samrómur Mimic 22.09
--------------------------------------------------------------------------------

Language        : Icelandic

Authors         : Staffan Hedström, Judy Y. Fong, Ragnheiður Þórhallsdóttir,
                  David Erik Mollberg, Smári Freyr Guðmundsson, Ólafur Helgi
                  Jónsson, Sunneva Þorsteinsdóttir, Eydís Huld Magnúsdóttir,
                  Safa Jemai, Jon Gudnason

Recommended use : speech recognition, speaker verification, speaker
                  identification and speaker enrollment

--------------------------------------------------------------------------------
Description
--------------------------------------------------------------------------------

This release of data from the Samrómur collection handles repeated audio.
Here the participants first had to listen to a TTS-generated audio clip before
recording their utterances. The corpus contains 91,408 (66.7 hours) un-verified
speech recordings in Icelandic.

The corpus is a result of the crowd-sourcing effort run by the Language and
Voice Lab (LVL) at Reykjavik University, in cooperation with Almannarómur, the
Icelandic Center for Language Technology. The recording process started in
October 2019 and ended September 2022.

The present edition of the corpus has been authorized for release in September
2022. The aim is to create an open-source speech corpus to enable research and
development for Icelandic Language Technology. The corpus consists of audio
recordings and a metadata file containing the sentences read by the participants.

To see more open resources developed by the Language and Voice Lab (LVL) see the
GitHub repository at https://github.com/cadia-lvl/samromur-asr

--------------------------------------------------------------------------------
Corpus Characteristics
--------------------------------------------------------------------------------

- The utterances are not validated.

- The utterances were recorded by a smartphone or the web app.

- Participants self-reported their age group, gender and native language.

- Participants are from 6 to 80+ years.

- The corpus contains 91,408 utterances from 1,364 speakers,
  totalling 66.7 hours.

- The amount of data from female speakers is 35h58m, and the amount of data from
  male speakers are 30h21m and the amount of data from speakers with an
  unknown gender information is 21m.

- The number of female speakers is 692, and the number of male speakers is 667.
  The number of speakers with unknown gender information is 13.

- The number of utterances from female speakers is 48,126, the utterances
  from male speakers are 42,833 and the utterances from speakers with
  unknown gender information is 449.

- The corpus is NOT split into train, dev, and test sets. For such subsets
  please use Samrómur 21.05, Samrómur Queries 21.12 or Samrómur Children 21.09.

- If any of the information in the metadata is unavailable this is
  indicated with a NAN in the metadata file.

--------------------------------------------------------------------------------
Collection Procedure
--------------------------------------------------------------------------------

The data was collected using the website https://samromur.is, the code of which
is available at https://github.com/cadia-lvl/samromur. The collection procedure
is well described in "Samrómur: Crowd-sourcing Data Collection for Icelandic
Speech Recognition" [1] and "Samrómur: Crowd-sourcing large amount of data” [3].
For this corpus, a twist was introduced. Before the participant was allowed to
record the utterance they had to listen to a recording of the utterance first.
The pre-generated recordings were made with Amazon Polly’s Icelandic voices,
Dora and Karl.

The original audio was collected at 44.1 kHz or 48 kHz sampling rate as *.wav
files, which were down-sampled to 16 kHz and converted to *.flac. Each recording
contains one read prompt from a script. The script contains 31,894 unique
prompts 399,829 tokens and 9,127 word types.

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

Prompts were pulled from these sources if they met the criteria of having only
letters which are present in the Icelandic alphabet, and if they are listed
in DIM: Database Icelandic Morphology [2]. Finally, there are also
synthesized prompts consisting of a name followed by a question,
in order to simulate dialogue with a smart device. The audio files' content
was manually verified against the questions by one or more listener(s).

--------------------------------------------------------------------------------
Data Format Specifics
--------------------------------------------------------------------------------

- Text : The corpus does not contain separate transcription or prompt files.
         The metadata file contains the prompts in their original text form,
         as the participants saw them, and also in their normalised form.
         The metadata also connects each utterance with the TTS generated audio
         they had to listen to before recording their utterance.

- Audio: The distributed audio files are encoded at 16 kHz sampling rate, 16 bit
         linear PCM, 1 channel, *.flac format. The audio for the utterances
         is located in the audio folder and contains folders that correspond to
         speaker IDs, and the audio files inside use the following naming
         convention: {speaker_ID}-{utterance_ID}.flac.

- Audio to repeat: The audio that the participants listened to is also provided
         in the audio_repeat folder. This is provided in the format that the
         participants were presented it: 22050 Hz, 1 channel, mp3.

--------------------------------------------------------------------------------
Citation
--------------------------------------------------------------------------------

When publishing results based on the corpus please refer to:

   Hedström et al. "Samrómur Mimic 22.09". Web Download. Reykjavik
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
|                  | Total |
| ---------------- | ----- |
| 0-19:            | 45.7% |
| 20-39:           | 32.1% |
| 40-59:           | 18.0% |
| 60-79:           | 3.7%  |
| 80+:             | 0.1%  |
| ---------------- | ----- |
| Female:          | 52.6% |
| Male:            | 46.9% |
| Other:           | 0.5%  |
| ---------------- | ----- |
| Duration (h):    | 66.7  |
| Unique speakers: | 1364  |

Total speakers and utterances:
Speakers: 1,364
Utterances: 91,408

Average utterance length: 2.63s

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



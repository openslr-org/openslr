# SASpeech Dataset - gold standard subset readme

This dataset contains approximately 4 hours of audio spoken by Shaul Amsterdamski in a recording studio with corresponding transcriptions. Audio was recorded between the years 2017 and 2023 (inclusive).

There is no overlap with the automated-only saspeech_automatic_data subset of the data.

## The Data

### Data Description

The audio is all sampled at 44100Hz, and is divided into utterances of up to 14 seconds according to natural pauses in speech.

The transcriptions were creating by manual correction of machine-generated transcripts from OpenAI Whisper large-v2. Automated diacritics (Nikud) were added using the open-source neural net [Nakdimon](https://github.com/elazarg/nakdimon) (paper: [Restoring Hebrew Diacritics Without a Dictionary](https://arxiv.org/abs/2105.05209)).

Of special note are the following transcription chocies:
* Numbers less than 10 were spelled out, while larger numbers are written as digits
* English terms and acronyms were transliterated to Hebrew
* Fillers were all marked as "אה"
* mistakes in speech were marked as "אהמ", even in cases where this is not close phonetically to the mispronunciation

These recordings were done over a period of multiple years. This creates a few oddities, for example:
* Some source files were compressed as MP3 flies
* Most of the speech is reading from a script, some is spontaneous speech
* Recording environments may be different between files
* The speaker's voice changed over time

Extra metadata is provided to allow users to differentiate between different source recording sessions for utternaces in the dataset.

### Data Organization

The dataset is organized into an LJSpeech-compatible format:

```
wavs/
metadata.csv
metadata_full.csv
README.md
robo_shaul_terms.pdf
```

Where `metadata.csv` contains LJSpeech-compatible data: it is a CSV with the separator `|` and no header, where the first field is the utterance id, and the 2nd and 3rd fields are the matching transcription. The file `wavs/<utterance id>.wav` is the corresponding audio.

Another file is included, `metadata_full.csv`, which is a CSV file with the separator `|` and this time, with a header, and an extra field which describes the source file from which the utterances were extracted. This is useful because there is a 1-to-1 relationship between the source file name and a recording session. Different recording sessions may have different properties as described in the previous chapter.

The file `robo_shaul_terms.pdf` is contains the license agreement for the dataset, in Hebrew. See [License](#license) below for an English summary.

### Notes

If you wish to remove diacritics, it is achievable by using the `hebrew` library on PyPI (`pip install hebrew`). Example usage:

```python
>>> from hebrew import Hebrew
>>> s_nikud = 'אַתֶּם הֶאֱזַנְתֶּם לִחְיוֹת כִּיס'
>>> Hebrew(s_nikud).no_niqqud().string
'אתם האזנתם לחיות כיס'
```

## License

By using this Dataset, you accept the terms and conditions in the [license agreement](https://kanstatic.azureedge.net/download/files/%D7%AA%D7%A7%D7%A0%D7%95%D7%9F%20%D7%A8%D7%95%D7%91%D7%95%20%D7%A9%D7%90%D7%95%D7%9C.pdf) (Hebrew-only). The license is also [provided with the dataset](robo_shaul_terms.pdf). In case of conflict between the attached license and the version available online, the online version takes precedence.

A summary of the terms in English:

Copyright for the recordings and corresponding transcriptions is owned solely by the Israeli Public Broadcast Corporation, the IPBC.

The dataset is free for use for non-commercial purposes, under the following limitations, whether by positive act or by omission:

* You may not present your use of the Dataset in a way that suggests that the IPBC supports or endorses you or your use of the Dataset
* You may not make use of the Dataset in a manner that brings harm to Shaul Amsterdamski and/or the IPBC, including defamation
* You may not make use of the Dataset for commercial or broadcast needs
* You may not make use of the Dataset for political needs
* You may not make use of the Dataset in a manner that breaches any applicable law

## Disclaimer

The Dataset is licensed "AS IS", and the IPBC excludes all representations, warranties, obligations and liabilities, whether explicit or implied, in relation to the Dataset, including as regards the suitability of the Dataset for your use.

The IPBC is not liable for any error or omission in the Dataset and shall not be held liable for any loss, injury or damage of any kind, whether direct or indirect, caused by its use to you or to third parties.

The IPBC is not liable for changes made to the Dataset by you or by any third party.

## Credits & Contact

The dataset contains recordings of Shaul Amsterdamski, who volunteered his voice for this dataset.

The Israeli Public Broadcasting Corporation generously allowed the release of the dataset under the attached terms and conditions.

Tamir Cohen of the IPBC provided the technical support to make the data available.

Uri Eliyabayev, the manager of [MDLI](https://machinelearning.co.il/), was instrumental in making this project come together.

Data was processed and prepared by Orian Sharoni and Roee Shenberg of Up·AI.

For any questions regarding the data, contact us at [saspeech@upai.dev](mailto:saspeech@upai.dev).

'use client';

import React, { useState, useEffect } from 'react';
import TranslationSaveForm from './SaveForm';
import Link from 'next/link';


const TranslationList = () => {
  const [translationUnits, setTranslationUnits] = useState([]);

  const dummyData = [
    { id: 1, text: 'Hello world!' },
    { id: 2, text: 'This is a translation unit.' },
    { id: 3, text: 'Lorem ipsum dolor sit amet.' },
  ];

  useEffect(() => {
    setTranslationUnits(dummyData);
  }, []);

  return (
    <div>
      <h2>Translation Units123</h2>
      <ul>
        {translationUnits.map((unit) => (
          <li key={unit.id}>
            {unit.text}
            <button>
              <Link href={`/SaveForm`} as={`/SaveForm`}>
                Save
              </Link>
            </button>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default TranslationList;
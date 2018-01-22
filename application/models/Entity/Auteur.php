<?php

namespace Entity;

/**
 * User Model
 *
 * @Entity
 * @Table(name="auteur")
 * @author  Joseph Wynn <joseph@wildlyinaccurate.com>
 */
class Auteur
{

	/**
	 * @id
	 * @Column(type="integer", unique=true, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $num;

	/**
	 * @Column(type="string", length=25, nullable=false)
	 */
	protected $nom;

	/**
	 * @Column(type="string", length=25)
	 */
	protected $prenom;

	/**
	 * @Column(type="string", length=15)
	 */
	protected $nationalite;

	/**
	 * @Column(type="integer")
	 */
	protected $isNobel;




	public function setNom($nom)
	{
		$this->nom = $nom;
		return $this;
	}

	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;
		return $this;
	}

	public function setNationalite($nationalite)
	{
		$this->nationalite = $nationalite;
		return $this;
	}

	public function setIsNobel($isNobel)
	{
		$this->isNobel = $isNobel;
		return $this;
	}

	public function getNum()
	{
		return $this->num;
	}


	public function getNom()
	{
		return $this->nom;
	}

	public function getPrenom()
	{
		return $this->prenom;
	}

	public function getNationalite()
	{
		return $this->nationalite;
	}

	public function getIsNobel()
	{
		return $this->isNobel;
	}


}

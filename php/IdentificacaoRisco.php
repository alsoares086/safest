<?php

    class IdentificacaoRisco{
        private $funcao;
        private $descricaoAtividade;
        private $equipamento;
        private $tipoRisco;
        private $agenteCondicao;
        private $fonte;
        private $consequenciaExposicao;
        private $probabilidade;
        private $consequencia;
        private $medidasAdministrativas;
        private $probabilidadeReferencia;
        private $consequenciaReferencia;
        private $matrizAvaliacao;

        public function getFuncao()
        {
                return $this->funcao;
        }

        /**
         * Set the value of funcao
         *
         * @return  self
         */ 
        public function setFuncao($funcao)
        {
                $this->funcao = $funcao;

                return $this;
        }

        /**
         * Get the value of descricaoAtividade
         */ 
        public function getDescricaoAtividade()
        {
                return $this->descricaoAtividade;
        }

        /**
         * Set the value of descricaoAtividade
         *
         * @return  self
         */ 
        public function setDescricaoAtividade($descricaoAtividade)
        {
                $this->descricaoAtividade = $descricaoAtividade;

                return $this;
        }

        /**
         * Get the value of equipamento
         */ 
        public function getEquipamento()
        {
                return $this->equipamento;
        }

        /**
         * Set the value of equipamento
         *
         * @return  self
         */ 
        public function setEquipamento($equipamento)
        {
                $this->equipamento = $equipamento;

                return $this;
        }

        /**
         * Get the value of tipoRisco
         */ 
        public function getTipoRisco()
        {
                return $this->tipoRisco;
        }

        /**
         * Set the value of tipoRisco
         *
         * @return  self
         */ 
        public function setTipoRisco($tipoRisco)
        {
                $this->tipoRisco = $tipoRisco;

                return $this;
        }



        /**
         * Get the value of agenteCondicao
         */ 
        public function getAgenteCondicao()
        {
                return $this->agenteCondicao;
        }

        /**
         * Set the value of agenteCondicao
         *
         * @return  self
         */ 
        public function setAgenteCondicao($agenteCondicao)
        {
                $this->agenteCondicao = $agenteCondicao;

                return $this;
        }

     

        /**
         * Get the value of consequenciaExposicao
         */ 
        public function getConsequenciaExposicao()
        {
                return $this->consequenciaExposicao;
        }

        /**
         * Set the value of consequenciaExposicao
         *
         * @return  self
         */ 
        public function setConsequenciaExposicao($consequenciaExposicao)
        {
                $this->consequenciaExposicao = $consequenciaExposicao;

                return $this;
        }

        /**
         * Get the value of probabilidade
         */ 
        public function getProbabilidade()
        {
                return $this->probabilidade;
        }

        /**
         * Set the value of probabilidade
         *
         * @return  self
         */ 
        public function setProbabilidade($probabilidade)
        {
                $this->probabilidade = $probabilidade;

                return $this;
        }

        /**
         * Get the value of consequencia
         */ 
        public function getConsequencia()
        {
                return $this->consequencia;
        }

        /**
         * Set the value of consequencia
         *
         * @return  self
         */ 
        public function setConsequencia($consequencia)
        {
                $this->consequencia = $consequencia;

                return $this;
        }

        /**
         * Get the value of medidasAdministrativas
         */ 
        public function getMedidasAdministrativas()
        {
                return $this->medidasAdministrativas;
        }

        /**
         * Set the value of medidasAdministrativas
         *
         * @return  self
         */ 
        public function setMedidasAdministrativas($medidasAdministrativas)
        {
                $this->medidasAdministrativas = $medidasAdministrativas;

                return $this;
        }

        /**
         * Get the value of probabilidadeReferencia
         */ 
        public function getProbabilidadeReferencia()
        {
                return $this->probabilidadeReferencia;
        }

        /**
         * Set the value of probabilidadeReferencia
         *
         * @return  self
         */ 
        public function setProbabilidadeReferencia($probabilidadeReferencia)
        {
                $this->probabilidadeReferencia = $probabilidadeReferencia;

                return $this;
        }

        /**
         * Get the value of consequenciaReferencia
         */ 
        public function getConsequenciaReferencia()
        {
                return $this->consequenciaReferencia;
        }

        /**
         * Set the value of consequenciaReferencia
         *
         * @return  self
         */ 
        public function setConsequenciaReferencia($consequenciaReferencia)
        {
                $this->consequenciaReferencia = $consequenciaReferencia;

                return $this;
        }

        /**
         * Get the value of matrizAvaliacao
         */ 
        public function getMatrizAvaliacao()
        {
                return $this->matrizAvaliacao;
        }

        /**
         * Set the value of matrizAvaliacao
         *
         * @return  self
         */ 
        public function setMatrizAvaliacao($matrizAvaliacao)
        {
                $this->matrizAvaliacao = $matrizAvaliacao;

                return $this;
        }

        /**
         * Get the value of fonte
         */
        public function getFonte()
        {
                return $this->fonte;
        }

        /**
         * Set the value of fonte
         */
        public function setFonte($fonte): self
        {
                $this->fonte = $fonte;

                return $this;
        }
    }



?>
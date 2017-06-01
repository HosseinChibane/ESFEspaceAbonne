<?php

/* ::base.html.twig */
class __TwigTemplate_611dedcd2614d62785879fbafc02bf8e2c8e9b441cd6b5f86643163ba09fae4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'Header' => array($this, 'block_Header'),
            'Navigation' => array($this, 'block_Navigation'),
            'Body' => array($this, 'block_Body'),
            'Footer' => array($this, 'block_Footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_320c27a07d6420a4c1bf0e02092e8d62669ab402b81c1eefda9a7c7ec7e07c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320c27a07d6420a4c1bf0e02092e8d62669ab402b81c1eefda9a7c7ec7e07c48->enter($__internal_320c27a07d6420a4c1bf0e02092e8d62669ab402b81c1eefda9a7c7ec7e07c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4d5b33a7957cf525a27af19abc1f83dd8f68dc7ab581599e449f198b3b8c9715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5b33a7957cf525a27af19abc1f83dd8f68dc7ab581599e449f198b3b8c9715->enter($__internal_4d5b33a7957cf525a27af19abc1f83dd8f68dc7ab581599e449f198b3b8c9715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>

 ";
        // line 8
        echo " ";
        $this->displayBlock('Head', $context, $blocks);
        // line 11
        echo "
</head>
<body>
  ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        $this->displayBlock('Header', $context, $blocks);
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $this->displayBlock('Navigation', $context, $blocks);
        // line 23
        echo "
    ";
        // line 25
        echo "    ";
        $this->displayBlock('Body', $context, $blocks);
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        $this->displayBlock('Footer', $context, $blocks);
        // line 32
        echo "  ";
        // line 33
        echo "</body>  
</html>
";
        
        $__internal_320c27a07d6420a4c1bf0e02092e8d62669ab402b81c1eefda9a7c7ec7e07c48->leave($__internal_320c27a07d6420a4c1bf0e02092e8d62669ab402b81c1eefda9a7c7ec7e07c48_prof);

        
        $__internal_4d5b33a7957cf525a27af19abc1f83dd8f68dc7ab581599e449f198b3b8c9715->leave($__internal_4d5b33a7957cf525a27af19abc1f83dd8f68dc7ab581599e449f198b3b8c9715_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_5a1a00aaa24d1c3247c9055f3486bd5ac931bf8dd92ee1ab86536f3bb8d27c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1a00aaa24d1c3247c9055f3486bd5ac931bf8dd92ee1ab86536f3bb8d27c58->enter($__internal_5a1a00aaa24d1c3247c9055f3486bd5ac931bf8dd92ee1ab86536f3bb8d27c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_321ea238c6356becb213a2e32450268ac5e78fddb758dec1ff1f5c31b63ee412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321ea238c6356becb213a2e32450268ac5e78fddb758dec1ff1f5c31b63ee412->enter($__internal_321ea238c6356becb213a2e32450268ac5e78fddb758dec1ff1f5c31b63ee412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_321ea238c6356becb213a2e32450268ac5e78fddb758dec1ff1f5c31b63ee412->leave($__internal_321ea238c6356becb213a2e32450268ac5e78fddb758dec1ff1f5c31b63ee412_prof);

        
        $__internal_5a1a00aaa24d1c3247c9055f3486bd5ac931bf8dd92ee1ab86536f3bb8d27c58->leave($__internal_5a1a00aaa24d1c3247c9055f3486bd5ac931bf8dd92ee1ab86536f3bb8d27c58_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_acb292bbd7547b5a4fb4700e94b25785bf99a1f4df2e2af4f7fe1f2a3a0394e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb292bbd7547b5a4fb4700e94b25785bf99a1f4df2e2af4f7fe1f2a3a0394e0->enter($__internal_acb292bbd7547b5a4fb4700e94b25785bf99a1f4df2e2af4f7fe1f2a3a0394e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_87c3f8ed3ea1175846bace4044f4658ba2e1c57f9e57f96a5c2f47b6b076f84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c3f8ed3ea1175846bace4044f4658ba2e1c57f9e57f96a5c2f47b6b076f84c->enter($__internal_87c3f8ed3ea1175846bace4044f4658ba2e1c57f9e57f96a5c2f47b6b076f84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_87c3f8ed3ea1175846bace4044f4658ba2e1c57f9e57f96a5c2f47b6b076f84c->leave($__internal_87c3f8ed3ea1175846bace4044f4658ba2e1c57f9e57f96a5c2f47b6b076f84c_prof);

        
        $__internal_acb292bbd7547b5a4fb4700e94b25785bf99a1f4df2e2af4f7fe1f2a3a0394e0->leave($__internal_acb292bbd7547b5a4fb4700e94b25785bf99a1f4df2e2af4f7fe1f2a3a0394e0_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_5654185c4f78b3b203c0672b1e48851b4f13585d214baa8bc62d1fbd5bc20b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5654185c4f78b3b203c0672b1e48851b4f13585d214baa8bc62d1fbd5bc20b2b->enter($__internal_5654185c4f78b3b203c0672b1e48851b4f13585d214baa8bc62d1fbd5bc20b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_1a5cb1f6b18f6e9690faedd8b8ee86d88e852d94a6aa146d7523126f98feb894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5cb1f6b18f6e9690faedd8b8ee86d88e852d94a6aa146d7523126f98feb894->enter($__internal_1a5cb1f6b18f6e9690faedd8b8ee86d88e852d94a6aa146d7523126f98feb894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_1a5cb1f6b18f6e9690faedd8b8ee86d88e852d94a6aa146d7523126f98feb894->leave($__internal_1a5cb1f6b18f6e9690faedd8b8ee86d88e852d94a6aa146d7523126f98feb894_prof);

        
        $__internal_5654185c4f78b3b203c0672b1e48851b4f13585d214baa8bc62d1fbd5bc20b2b->leave($__internal_5654185c4f78b3b203c0672b1e48851b4f13585d214baa8bc62d1fbd5bc20b2b_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_69348f97568cdb6ce9dcfc6a7bfbc9375491f072cbcbf2dbfff0db745d51a9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69348f97568cdb6ce9dcfc6a7bfbc9375491f072cbcbf2dbfff0db745d51a9d5->enter($__internal_69348f97568cdb6ce9dcfc6a7bfbc9375491f072cbcbf2dbfff0db745d51a9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_d55896cf4a8ecc95af8b760467a2c2fefa9aedda0302004e9c90019d8c24ce91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55896cf4a8ecc95af8b760467a2c2fefa9aedda0302004e9c90019d8c24ce91->enter($__internal_d55896cf4a8ecc95af8b760467a2c2fefa9aedda0302004e9c90019d8c24ce91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_d55896cf4a8ecc95af8b760467a2c2fefa9aedda0302004e9c90019d8c24ce91->leave($__internal_d55896cf4a8ecc95af8b760467a2c2fefa9aedda0302004e9c90019d8c24ce91_prof);

        
        $__internal_69348f97568cdb6ce9dcfc6a7bfbc9375491f072cbcbf2dbfff0db745d51a9d5->leave($__internal_69348f97568cdb6ce9dcfc6a7bfbc9375491f072cbcbf2dbfff0db745d51a9d5_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_d16cb404a41416d5db81f737e3352d023f82f03a2c8e3dca7c614d1d4c39441a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16cb404a41416d5db81f737e3352d023f82f03a2c8e3dca7c614d1d4c39441a->enter($__internal_d16cb404a41416d5db81f737e3352d023f82f03a2c8e3dca7c614d1d4c39441a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_32edc461fef003f77fc35938cce04fa79bfbd5337c37fa62c64ce730d34115f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32edc461fef003f77fc35938cce04fa79bfbd5337c37fa62c64ce730d34115f9->enter($__internal_32edc461fef003f77fc35938cce04fa79bfbd5337c37fa62c64ce730d34115f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_32edc461fef003f77fc35938cce04fa79bfbd5337c37fa62c64ce730d34115f9->leave($__internal_32edc461fef003f77fc35938cce04fa79bfbd5337c37fa62c64ce730d34115f9_prof);

        
        $__internal_d16cb404a41416d5db81f737e3352d023f82f03a2c8e3dca7c614d1d4c39441a->leave($__internal_d16cb404a41416d5db81f737e3352d023f82f03a2c8e3dca7c614d1d4c39441a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 30,  166 => 29,  147 => 25,  135 => 21,  124 => 20,  105 => 16,  95 => 10,  93 => 9,  82 => 8,  70 => 33,  68 => 32,  65 => 29,  62 => 27,  59 => 25,  56 => 23,  53 => 20,  50 => 18,  47 => 16,  45 => 15,  40 => 11,  37 => 8,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layoutdudeego.html.twig #}

<!DOCTYPE html>
<html>
<head>

 {# Contenu de la balise head #}
 {% block Head %} 
   {% include ':backend:head.html.twig' %}
 {% endblock %}

</head>
<body>
  {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
    {# Contenu de l'en-tete #}
    {% block Header %} 
    {% endblock %}

    {# Contenu de la balise nav #}
    {% block Navigation %} 
      {% include ':backend:navigation.html.twig' %}   
    {% endblock %}

    {# Contenu du corps de page #}
    {% block Body %} 
    {% endblock %}

    {# Contenu du pied de page #}
    {% block Footer %} 
      {% include ':backend:footer.html.twig' %} 
    {% endblock %}
  {#{% endif %}#}
</body>  
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources\\views/base.html.twig");
    }
}

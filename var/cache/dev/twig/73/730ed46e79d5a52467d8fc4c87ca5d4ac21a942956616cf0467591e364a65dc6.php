<?php

/* ::base.html.twig */
class __TwigTemplate_067a276229e98f23a9b6ccd7d27671969fcfa7034f7ad9cfbe9d678ca79b18e7 extends Twig_Template
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
        $__internal_5ca0f9a3ab9b7d6e3b62cfcea5d1ff2ece38a942476e38eeb0311e65b8c19714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca0f9a3ab9b7d6e3b62cfcea5d1ff2ece38a942476e38eeb0311e65b8c19714->enter($__internal_5ca0f9a3ab9b7d6e3b62cfcea5d1ff2ece38a942476e38eeb0311e65b8c19714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9b54da490237e79cceb83d1496f36310d1cabbc582c98bf84e5d5b3dec8061cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b54da490237e79cceb83d1496f36310d1cabbc582c98bf84e5d5b3dec8061cd->enter($__internal_9b54da490237e79cceb83d1496f36310d1cabbc582c98bf84e5d5b3dec8061cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5ca0f9a3ab9b7d6e3b62cfcea5d1ff2ece38a942476e38eeb0311e65b8c19714->leave($__internal_5ca0f9a3ab9b7d6e3b62cfcea5d1ff2ece38a942476e38eeb0311e65b8c19714_prof);

        
        $__internal_9b54da490237e79cceb83d1496f36310d1cabbc582c98bf84e5d5b3dec8061cd->leave($__internal_9b54da490237e79cceb83d1496f36310d1cabbc582c98bf84e5d5b3dec8061cd_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_03a2d43ce9ddc7d4e8116eb519aca2eba2a7cd812b7818619c1123cf4fac227d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a2d43ce9ddc7d4e8116eb519aca2eba2a7cd812b7818619c1123cf4fac227d->enter($__internal_03a2d43ce9ddc7d4e8116eb519aca2eba2a7cd812b7818619c1123cf4fac227d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_6d0e28e27516c6bf7aeff13afd659d5ad47c0d9bb44b0b3651f4e6924514db51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0e28e27516c6bf7aeff13afd659d5ad47c0d9bb44b0b3651f4e6924514db51->enter($__internal_6d0e28e27516c6bf7aeff13afd659d5ad47c0d9bb44b0b3651f4e6924514db51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_6d0e28e27516c6bf7aeff13afd659d5ad47c0d9bb44b0b3651f4e6924514db51->leave($__internal_6d0e28e27516c6bf7aeff13afd659d5ad47c0d9bb44b0b3651f4e6924514db51_prof);

        
        $__internal_03a2d43ce9ddc7d4e8116eb519aca2eba2a7cd812b7818619c1123cf4fac227d->leave($__internal_03a2d43ce9ddc7d4e8116eb519aca2eba2a7cd812b7818619c1123cf4fac227d_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_68017d1d09961ae38d2b00b3208859b389b93326e3ce2cd7cae11d7da6a65e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68017d1d09961ae38d2b00b3208859b389b93326e3ce2cd7cae11d7da6a65e53->enter($__internal_68017d1d09961ae38d2b00b3208859b389b93326e3ce2cd7cae11d7da6a65e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_a0eca994485bd874b5678d0da19342f2abe589e06ed29880bb10045ae2b2fd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0eca994485bd874b5678d0da19342f2abe589e06ed29880bb10045ae2b2fd85->enter($__internal_a0eca994485bd874b5678d0da19342f2abe589e06ed29880bb10045ae2b2fd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_a0eca994485bd874b5678d0da19342f2abe589e06ed29880bb10045ae2b2fd85->leave($__internal_a0eca994485bd874b5678d0da19342f2abe589e06ed29880bb10045ae2b2fd85_prof);

        
        $__internal_68017d1d09961ae38d2b00b3208859b389b93326e3ce2cd7cae11d7da6a65e53->leave($__internal_68017d1d09961ae38d2b00b3208859b389b93326e3ce2cd7cae11d7da6a65e53_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_e8f55d6701800330e03ad939e62be3257d3f32a3306ac3f302bfa2f2cd6aad0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f55d6701800330e03ad939e62be3257d3f32a3306ac3f302bfa2f2cd6aad0b->enter($__internal_e8f55d6701800330e03ad939e62be3257d3f32a3306ac3f302bfa2f2cd6aad0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_47452e866b9327ff48f712ad034dee027ab1070bdff2664a4378909b9758a358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47452e866b9327ff48f712ad034dee027ab1070bdff2664a4378909b9758a358->enter($__internal_47452e866b9327ff48f712ad034dee027ab1070bdff2664a4378909b9758a358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_47452e866b9327ff48f712ad034dee027ab1070bdff2664a4378909b9758a358->leave($__internal_47452e866b9327ff48f712ad034dee027ab1070bdff2664a4378909b9758a358_prof);

        
        $__internal_e8f55d6701800330e03ad939e62be3257d3f32a3306ac3f302bfa2f2cd6aad0b->leave($__internal_e8f55d6701800330e03ad939e62be3257d3f32a3306ac3f302bfa2f2cd6aad0b_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_576eb3c8d933aec95a327360732b2e18fd06b8c90d952799918e53e4a1ff1ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576eb3c8d933aec95a327360732b2e18fd06b8c90d952799918e53e4a1ff1ec0->enter($__internal_576eb3c8d933aec95a327360732b2e18fd06b8c90d952799918e53e4a1ff1ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_5b131e1db7a839a74e0bde84923a28fea5976aca462c048558ba10e9fbd6af56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b131e1db7a839a74e0bde84923a28fea5976aca462c048558ba10e9fbd6af56->enter($__internal_5b131e1db7a839a74e0bde84923a28fea5976aca462c048558ba10e9fbd6af56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_5b131e1db7a839a74e0bde84923a28fea5976aca462c048558ba10e9fbd6af56->leave($__internal_5b131e1db7a839a74e0bde84923a28fea5976aca462c048558ba10e9fbd6af56_prof);

        
        $__internal_576eb3c8d933aec95a327360732b2e18fd06b8c90d952799918e53e4a1ff1ec0->leave($__internal_576eb3c8d933aec95a327360732b2e18fd06b8c90d952799918e53e4a1ff1ec0_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_34785ca65ae76d574028fe2c72f2f7bba4909c5c3eaa0e4599bf3f8dae622335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34785ca65ae76d574028fe2c72f2f7bba4909c5c3eaa0e4599bf3f8dae622335->enter($__internal_34785ca65ae76d574028fe2c72f2f7bba4909c5c3eaa0e4599bf3f8dae622335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_068114b4483a9ae4044486d8fccdd9c81bb2ea9da877a510835d8e7924a8a1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068114b4483a9ae4044486d8fccdd9c81bb2ea9da877a510835d8e7924a8a1d6->enter($__internal_068114b4483a9ae4044486d8fccdd9c81bb2ea9da877a510835d8e7924a8a1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_068114b4483a9ae4044486d8fccdd9c81bb2ea9da877a510835d8e7924a8a1d6->leave($__internal_068114b4483a9ae4044486d8fccdd9c81bb2ea9da877a510835d8e7924a8a1d6_prof);

        
        $__internal_34785ca65ae76d574028fe2c72f2f7bba4909c5c3eaa0e4599bf3f8dae622335->leave($__internal_34785ca65ae76d574028fe2c72f2f7bba4909c5c3eaa0e4599bf3f8dae622335_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\views\\base.html.twig");
    }
}

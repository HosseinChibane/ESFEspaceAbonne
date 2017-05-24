<?php

/* ::base.html.twig */
class __TwigTemplate_0dbda11ea068c6f2d3b7786a83eb16a865ba026d81ddc041593aa9a7604615d0 extends Twig_Template
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
        $__internal_3bbba66d7599d49b6833bfba25011ada6fac80fcc1fdd92e49f03d3fbe84f921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbba66d7599d49b6833bfba25011ada6fac80fcc1fdd92e49f03d3fbe84f921->enter($__internal_3bbba66d7599d49b6833bfba25011ada6fac80fcc1fdd92e49f03d3fbe84f921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_84935aaec58b0b2ce253c7454847883fe92e9a26820f279970e04a24540f819f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84935aaec58b0b2ce253c7454847883fe92e9a26820f279970e04a24540f819f->enter($__internal_84935aaec58b0b2ce253c7454847883fe92e9a26820f279970e04a24540f819f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3bbba66d7599d49b6833bfba25011ada6fac80fcc1fdd92e49f03d3fbe84f921->leave($__internal_3bbba66d7599d49b6833bfba25011ada6fac80fcc1fdd92e49f03d3fbe84f921_prof);

        
        $__internal_84935aaec58b0b2ce253c7454847883fe92e9a26820f279970e04a24540f819f->leave($__internal_84935aaec58b0b2ce253c7454847883fe92e9a26820f279970e04a24540f819f_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_91b446e20e4346d021868eadd30aa80822ab19e4007ca1f79604fdfeb558861d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b446e20e4346d021868eadd30aa80822ab19e4007ca1f79604fdfeb558861d->enter($__internal_91b446e20e4346d021868eadd30aa80822ab19e4007ca1f79604fdfeb558861d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_ea85b9676ed195b2cca2f97f7250c50493f8ec1990f32cca6b56f72537e9a8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea85b9676ed195b2cca2f97f7250c50493f8ec1990f32cca6b56f72537e9a8f3->enter($__internal_ea85b9676ed195b2cca2f97f7250c50493f8ec1990f32cca6b56f72537e9a8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_ea85b9676ed195b2cca2f97f7250c50493f8ec1990f32cca6b56f72537e9a8f3->leave($__internal_ea85b9676ed195b2cca2f97f7250c50493f8ec1990f32cca6b56f72537e9a8f3_prof);

        
        $__internal_91b446e20e4346d021868eadd30aa80822ab19e4007ca1f79604fdfeb558861d->leave($__internal_91b446e20e4346d021868eadd30aa80822ab19e4007ca1f79604fdfeb558861d_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_fce66fcd55555346be484cc9048d27ef67cdeccf8c92e6223a18a916cd394115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce66fcd55555346be484cc9048d27ef67cdeccf8c92e6223a18a916cd394115->enter($__internal_fce66fcd55555346be484cc9048d27ef67cdeccf8c92e6223a18a916cd394115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_ab5fca934c72bf9e588e792a28f68dff6793344e654bfc9b7e53c2e48cb2f0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5fca934c72bf9e588e792a28f68dff6793344e654bfc9b7e53c2e48cb2f0cf->enter($__internal_ab5fca934c72bf9e588e792a28f68dff6793344e654bfc9b7e53c2e48cb2f0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_ab5fca934c72bf9e588e792a28f68dff6793344e654bfc9b7e53c2e48cb2f0cf->leave($__internal_ab5fca934c72bf9e588e792a28f68dff6793344e654bfc9b7e53c2e48cb2f0cf_prof);

        
        $__internal_fce66fcd55555346be484cc9048d27ef67cdeccf8c92e6223a18a916cd394115->leave($__internal_fce66fcd55555346be484cc9048d27ef67cdeccf8c92e6223a18a916cd394115_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_83ff2ceed0d85f10c76ede07bb3e8d25921fc4a92c5caaefa98347d4095d6056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ff2ceed0d85f10c76ede07bb3e8d25921fc4a92c5caaefa98347d4095d6056->enter($__internal_83ff2ceed0d85f10c76ede07bb3e8d25921fc4a92c5caaefa98347d4095d6056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_d85070335171b6e35c5eef841749babd0a246cdbfd3833e3f7ddbb9a29d5ea1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85070335171b6e35c5eef841749babd0a246cdbfd3833e3f7ddbb9a29d5ea1b->enter($__internal_d85070335171b6e35c5eef841749babd0a246cdbfd3833e3f7ddbb9a29d5ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_d85070335171b6e35c5eef841749babd0a246cdbfd3833e3f7ddbb9a29d5ea1b->leave($__internal_d85070335171b6e35c5eef841749babd0a246cdbfd3833e3f7ddbb9a29d5ea1b_prof);

        
        $__internal_83ff2ceed0d85f10c76ede07bb3e8d25921fc4a92c5caaefa98347d4095d6056->leave($__internal_83ff2ceed0d85f10c76ede07bb3e8d25921fc4a92c5caaefa98347d4095d6056_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_2c282fe4229693be0a0320fc78899b88102395f820407154da4e9af592dcfd6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c282fe4229693be0a0320fc78899b88102395f820407154da4e9af592dcfd6c->enter($__internal_2c282fe4229693be0a0320fc78899b88102395f820407154da4e9af592dcfd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_4be8288b8eb3d8c40e6f0def1330b81e75a4a446870af130e9fb315ae708a92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be8288b8eb3d8c40e6f0def1330b81e75a4a446870af130e9fb315ae708a92f->enter($__internal_4be8288b8eb3d8c40e6f0def1330b81e75a4a446870af130e9fb315ae708a92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_4be8288b8eb3d8c40e6f0def1330b81e75a4a446870af130e9fb315ae708a92f->leave($__internal_4be8288b8eb3d8c40e6f0def1330b81e75a4a446870af130e9fb315ae708a92f_prof);

        
        $__internal_2c282fe4229693be0a0320fc78899b88102395f820407154da4e9af592dcfd6c->leave($__internal_2c282fe4229693be0a0320fc78899b88102395f820407154da4e9af592dcfd6c_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_5f1bbd8b97c074ab3da59497f4869a896310b4c6a75473acbfbad3e7155f7613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1bbd8b97c074ab3da59497f4869a896310b4c6a75473acbfbad3e7155f7613->enter($__internal_5f1bbd8b97c074ab3da59497f4869a896310b4c6a75473acbfbad3e7155f7613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_a51a4ab303cf3cff3fdc8d29bb29ecf64b0f5e0e6b3132a8f34603f521b6b936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51a4ab303cf3cff3fdc8d29bb29ecf64b0f5e0e6b3132a8f34603f521b6b936->enter($__internal_a51a4ab303cf3cff3fdc8d29bb29ecf64b0f5e0e6b3132a8f34603f521b6b936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_a51a4ab303cf3cff3fdc8d29bb29ecf64b0f5e0e6b3132a8f34603f521b6b936->leave($__internal_a51a4ab303cf3cff3fdc8d29bb29ecf64b0f5e0e6b3132a8f34603f521b6b936_prof);

        
        $__internal_5f1bbd8b97c074ab3da59497f4869a896310b4c6a75473acbfbad3e7155f7613->leave($__internal_5f1bbd8b97c074ab3da59497f4869a896310b4c6a75473acbfbad3e7155f7613_prof);

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

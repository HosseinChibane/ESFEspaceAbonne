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
        $__internal_fd06953993f9b655677dfc2db1da1ac4d05344cd6ac6edf2e5e2c77ee9788e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd06953993f9b655677dfc2db1da1ac4d05344cd6ac6edf2e5e2c77ee9788e49->enter($__internal_fd06953993f9b655677dfc2db1da1ac4d05344cd6ac6edf2e5e2c77ee9788e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_71df83e278555bd268b061efc4a4a942e1551d79b0b6474a431c7ac3af0a4e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71df83e278555bd268b061efc4a4a942e1551d79b0b6474a431c7ac3af0a4e7f->enter($__internal_71df83e278555bd268b061efc4a4a942e1551d79b0b6474a431c7ac3af0a4e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_fd06953993f9b655677dfc2db1da1ac4d05344cd6ac6edf2e5e2c77ee9788e49->leave($__internal_fd06953993f9b655677dfc2db1da1ac4d05344cd6ac6edf2e5e2c77ee9788e49_prof);

        
        $__internal_71df83e278555bd268b061efc4a4a942e1551d79b0b6474a431c7ac3af0a4e7f->leave($__internal_71df83e278555bd268b061efc4a4a942e1551d79b0b6474a431c7ac3af0a4e7f_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_615600f3f58ef3efd1d946098f2cc988807c6ffd728db1db9aaacf9f156b8189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615600f3f58ef3efd1d946098f2cc988807c6ffd728db1db9aaacf9f156b8189->enter($__internal_615600f3f58ef3efd1d946098f2cc988807c6ffd728db1db9aaacf9f156b8189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_8b58729b0a678bc844ae4362015213c02f843e950fcb6370d1cc83320f3d5507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b58729b0a678bc844ae4362015213c02f843e950fcb6370d1cc83320f3d5507->enter($__internal_8b58729b0a678bc844ae4362015213c02f843e950fcb6370d1cc83320f3d5507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":backend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_8b58729b0a678bc844ae4362015213c02f843e950fcb6370d1cc83320f3d5507->leave($__internal_8b58729b0a678bc844ae4362015213c02f843e950fcb6370d1cc83320f3d5507_prof);

        
        $__internal_615600f3f58ef3efd1d946098f2cc988807c6ffd728db1db9aaacf9f156b8189->leave($__internal_615600f3f58ef3efd1d946098f2cc988807c6ffd728db1db9aaacf9f156b8189_prof);

    }

    // line 16
    public function block_Header($context, array $blocks = array())
    {
        $__internal_835dc67404e113637e919bbbaf50e0c24fa49202587cd5f6cdf277dbd37c69ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835dc67404e113637e919bbbaf50e0c24fa49202587cd5f6cdf277dbd37c69ae->enter($__internal_835dc67404e113637e919bbbaf50e0c24fa49202587cd5f6cdf277dbd37c69ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        $__internal_72764a8f5bdfbc153d0ce0ddfccaa82c3804725576630f910fc3a784e33afe41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72764a8f5bdfbc153d0ce0ddfccaa82c3804725576630f910fc3a784e33afe41->enter($__internal_72764a8f5bdfbc153d0ce0ddfccaa82c3804725576630f910fc3a784e33afe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        echo " 
    ";
        
        $__internal_72764a8f5bdfbc153d0ce0ddfccaa82c3804725576630f910fc3a784e33afe41->leave($__internal_72764a8f5bdfbc153d0ce0ddfccaa82c3804725576630f910fc3a784e33afe41_prof);

        
        $__internal_835dc67404e113637e919bbbaf50e0c24fa49202587cd5f6cdf277dbd37c69ae->leave($__internal_835dc67404e113637e919bbbaf50e0c24fa49202587cd5f6cdf277dbd37c69ae_prof);

    }

    // line 20
    public function block_Navigation($context, array $blocks = array())
    {
        $__internal_0dabf97ed2fdb9de73dc909acacfb9c8bb74faf6cfcab01dcb0e76bb19ba7a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dabf97ed2fdb9de73dc909acacfb9c8bb74faf6cfcab01dcb0e76bb19ba7a59->enter($__internal_0dabf97ed2fdb9de73dc909acacfb9c8bb74faf6cfcab01dcb0e76bb19ba7a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        $__internal_51f665cd6b079482526fee8ec92df763ee5edecaa62b1182e690e6b181f420f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f665cd6b079482526fee8ec92df763ee5edecaa62b1182e690e6b181f420f1->enter($__internal_51f665cd6b079482526fee8ec92df763ee5edecaa62b1182e690e6b181f420f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Navigation"));

        echo " 
      ";
        // line 21
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 21)->display($context);
        echo "   
    ";
        
        $__internal_51f665cd6b079482526fee8ec92df763ee5edecaa62b1182e690e6b181f420f1->leave($__internal_51f665cd6b079482526fee8ec92df763ee5edecaa62b1182e690e6b181f420f1_prof);

        
        $__internal_0dabf97ed2fdb9de73dc909acacfb9c8bb74faf6cfcab01dcb0e76bb19ba7a59->leave($__internal_0dabf97ed2fdb9de73dc909acacfb9c8bb74faf6cfcab01dcb0e76bb19ba7a59_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = array())
    {
        $__internal_cd1a2e70b1a0690850c884c2a421df3f5e6e9a0ddcfce5bb3935d010da28b9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1a2e70b1a0690850c884c2a421df3f5e6e9a0ddcfce5bb3935d010da28b9ee->enter($__internal_cd1a2e70b1a0690850c884c2a421df3f5e6e9a0ddcfce5bb3935d010da28b9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_bfb62c11603f058f1a58f3da33be6d1661af82e0cc79086f18eda47d0628b1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb62c11603f058f1a58f3da33be6d1661af82e0cc79086f18eda47d0628b1ee->enter($__internal_bfb62c11603f058f1a58f3da33be6d1661af82e0cc79086f18eda47d0628b1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo " 
    ";
        
        $__internal_bfb62c11603f058f1a58f3da33be6d1661af82e0cc79086f18eda47d0628b1ee->leave($__internal_bfb62c11603f058f1a58f3da33be6d1661af82e0cc79086f18eda47d0628b1ee_prof);

        
        $__internal_cd1a2e70b1a0690850c884c2a421df3f5e6e9a0ddcfce5bb3935d010da28b9ee->leave($__internal_cd1a2e70b1a0690850c884c2a421df3f5e6e9a0ddcfce5bb3935d010da28b9ee_prof);

    }

    // line 29
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_c8f132a3c0208a37a78d83a49a1b0985cc1c5b0db3e8e66362758793945cf0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f132a3c0208a37a78d83a49a1b0985cc1c5b0db3e8e66362758793945cf0d9->enter($__internal_c8f132a3c0208a37a78d83a49a1b0985cc1c5b0db3e8e66362758793945cf0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_39a36bd7c848855c282815f421c209fa8554684c619e25f650e658749f83a640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a36bd7c848855c282815f421c209fa8554684c619e25f650e658749f83a640->enter($__internal_39a36bd7c848855c282815f421c209fa8554684c619e25f650e658749f83a640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        echo " 
      ";
        // line 30
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 30)->display($context);
        echo " 
    ";
        
        $__internal_39a36bd7c848855c282815f421c209fa8554684c619e25f650e658749f83a640->leave($__internal_39a36bd7c848855c282815f421c209fa8554684c619e25f650e658749f83a640_prof);

        
        $__internal_c8f132a3c0208a37a78d83a49a1b0985cc1c5b0db3e8e66362758793945cf0d9->leave($__internal_c8f132a3c0208a37a78d83a49a1b0985cc1c5b0db3e8e66362758793945cf0d9_prof);

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
